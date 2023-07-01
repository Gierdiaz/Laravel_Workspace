<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invoices;

class InvoicesPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * This parameter is not just a model
     * is the user already logged in and authenticated.
     * Obs: A police is to free the user to do something.
     */
    public function show(User $user, Invoices $invoice) {

        return $invoice->user_id == $user->id;
    }

    public function isAdmin(User $user, Invoices $invoice) {

        return $user->role == 'super-admin';
    }
}
