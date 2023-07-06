<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\InvoiceResource;
use App\Models\Invoices;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class InvoiceController extends Controller
{

    use HttpResponses;

    public function __construct(){
        //$this->middleware('auth:sanctum')->only(['store', 'update']);

        $this->middleware(['auth:sanctum', 'ability:test-index'])->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Relationship between tables
        return InvoiceResource::collection(Invoices::with('user')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'user_id'    => 'required',
            'type'       => 'required|max:6',
            'paid'       => 'required|numeric|between:0,1',
            'payment_date' => 'nullable',
            'value' => 'required|numeric|between:1,9999.99'
        ]);


        if( $validator->fails()) {
            return $this->fail('Invalid', 422, $validator->errors());
        }

        $created = Invoices::create($validator->validate());

        if($created) {
            return $this->success('Invoice created', 200, new InvoiceResource($created->load('user'))); //retornar um relacionamento com load
        }

        return $this->fail('Invoice not created', 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoices $invoice)
    {
        return new InvoiceResource($invoice);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Invoices $invoice)
    {
        $validator = FacadesValidator::make($request->all(), [
            'user_id'       => 'required',
            'type'          => 'required|max:6|in:'. implode(',', ['PIX', 'BOLETO', 'CARTÃO']),
            'paid'          => 'required|numeric|between:0,1',
            'payment_date'  => 'nullable',
            'value'         => 'required|numeric'
        ]);

        if($validator->fails()) {
            return $this->fail('Validation failed', 422, $validator->errors());
        }

        $validated = $validator->validated();

        $updated = $invoice->update([
            'user_id'       => $validated['user_id'],
            'type'          => $validated['type'],
            'paid'          => $validated['paid'],
            'payment_date'  => $validated['paid'] ? $validated['payment_date'] : null,
            'value'         => $validated['value']
        ]);

        if($updated) {
            return $this->success('Invoice updated', 200, new InvoiceResource($invoice->load('user')));
        }

        return $this->fail('Invoice not updated', 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoices $invoice)
    {
        $deleted = $invoice->delete();

        if($deleted) {
            return $this->success('Invoice deleted', 200);
        }

        return $this->fail('Invoice not deleted', 400);
    }

}
