<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class mahasiswaAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() )
        {
            /** @var User $user */
            $user = Auth::user();
            // if user is not admin take him to his dashboard
            if ( $user->hasRole('mahasiswa') ) {
                return redirect(route('dashboard_mahasiswa'));
            }

            else if ( $user->hasRole('koordinator') ) {
                return redirect(route('dashboard_koordinator'));
            }

            // allow admin to proceed with request
            else if ( $user->hasRole('pembimbing') ) {
                return $next($request);
            }
        }

        abort(403);  // permission denied error
    }
}
