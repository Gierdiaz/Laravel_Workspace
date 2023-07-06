<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\MessageBag;

//Padrão de resposta da API
trait HttpResponses
{
    public function success(string $message, string|int $status, array|Model|JsonResource $data = []) {
        return response()->json([
            'message'   => $message,
            'status'    => $status,
            'data'      => $data
        ], $status);
    }

    public function fail(string $message, string|int $status, array|MessageBag $errors = [], array $data = []) {
        return response()->json([
            'message'   => $message,
            'status'    => $status,
            'errors'    => $errors,
            'data'      => $data
        ], $status);
    }
}

?>