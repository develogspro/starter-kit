<?php

use Illuminate\Contracts\Auth\Authenticatable;

function user(): ?Authenticatable
{
    if (! auth()->check()) {
        return null;
    }

    return auth()->user();
}
