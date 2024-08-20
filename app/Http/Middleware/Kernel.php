<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \App\Http\Middleware\RedirectIfAuthenticated;

class Kernel
{
    protected $middleware = [
        // Outros middlewares
        \Illuminate\Http\Middleware\HandleCors::class,
    ];
    
}
