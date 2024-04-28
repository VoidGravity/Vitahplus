<?php

namespace App\Http\Middleware;

use App\Models\Doctors;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/auth/login');
        }

        $userAuth = Auth::user();

        $user = User::find($userAuth->id);
        $doctor = Doctors::find($user->doctors_id);


        if ($user->doctors_id) {
            $role = $doctor->role;

            if ($role === 'doctor' || $role === 'nurse' || $role === 'admin') {
                return $next($request);
            }
        } else {
            return redirect('/frontOffice/index');
        }

        return $next($request);
    }
}
