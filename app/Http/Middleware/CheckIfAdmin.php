<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (!isset($user)) {
            return redirect('/home');
        }

        if (!$user->isAdmin()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
