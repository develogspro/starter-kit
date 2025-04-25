<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

function user(): User
{
    if (! Auth::check() or empty(Auth::user())) {
        throw new Exception('User not authenticated');
    }

    return Auth::user();
}
