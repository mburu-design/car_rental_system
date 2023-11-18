<?php

namespace App\Http\Middleware;

use App\Models\Riders;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RidersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $riderId = Auth::user()->id;
        $exists = Riders::where('user_id', $riderId)->exists();
        if ($exists) {
            return $next($request);
        }
        return redirect('/rider/register');
    }
}
