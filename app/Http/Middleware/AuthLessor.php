<?php

namespace App\Http\Middleware;

use App\Models\CarOwners;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AuthLessor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ownerId = Auth::user()->id;
        $exists = CarOwners::where('user_id', $ownerId)->exists();
        if ($exists) {
            return $next($request);
        }
        return redirect('/lessor/register');
    }
}
