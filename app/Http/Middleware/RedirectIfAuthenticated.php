<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        if ($guard == "enseignant" && Auth::guard($guard)->check()) {
            return redirect('/enseignant');
        }
        if ($guard == "etudiant" && Auth::guard($guard)->check()) {
            return redirect('/etudiant');
        }
        if ($guard == "directeur_reg" && Auth::guard($guard)->check()) {
            return redirect('/directeur_reg');
        }
        if ($guard == "directeur_prov" && Auth::guard($guard)->check()) {
            return redirect('/directeur_prov');
        }
        if ($guard == "inspecteur_reg" && Auth::guard($guard)->check()) {
            return redirect('/inspecteur_reg');
        }
        if ($guard == "gestionnaire_salle" && Auth::guard($guard)->check()) {
            return redirect('/gestionnaire');
        }
        if ($guard == "parent_tuteur" && Auth::guard($guard)->check()) {
            return redirect('/parent_tut');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
