<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CeckAdmin
{

    public function handle(Request $request, Closure $next)
    {

        if(auth()->user()->type == 'admin') {
            return $next($request);
        }
        Auth::logout();
        return redirect()->route('index');
    }
}
