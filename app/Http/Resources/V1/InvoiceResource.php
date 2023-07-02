<?php

namespace App\Http\Resources\v1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $paid = $this->paid;

        return [
            'user'  => [
            'firstName' => $this->user->firstName,
            'lastName'  => $this->user->lastName,
            'email'     => $this->user->email
            ],

            'type'          => $this->type,
            'value'         => 'R$ '. number_format($this->value,2,',','.'),
            'paid'          => $paid ? 'Pago' : 'Não pago',
            'payment_date'  => $paid ? Carbon::parse($this->payment_date)->format('d/m/Y H:i:s') : null,
            'payment_since' => $paid ? Carbon::parse($this->payment_date)->diffForHumans() : null
        ];
    }
}
