<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Illuminate\Auth\AuthenticationException;
use Auth;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admins') || $request->is('admins/*')) {
            return redirect()->guest('/login/admin');
        }
        if ($request->is('enseignants') || $request->is('enseignants/*')) {
            return redirect()->guest('/login/enseignant');
        }
        if ($request->is('etudiants') || $request->is('etudiants/*')) {
            return redirect()->guest('/login/etudiant');
        }
        if ($request->is('directeur_regs') || $request->is('directeur_regs/*')) {
            return redirect()->guest('login/directeur_reg');
        }
        if ($request->is('directeur_provs') || $request->is('directeur_provs /*')) {
            return redirect()->guest('/login/directeur_prov');
        }
        if ($request->is('inspecteurs') || $request->is('directeurs /*')) {
            return redirect()->guest('/login/inspecteur');
        }
        if ($request->is('gestionnaires') || $request->is('gestionnaires /*')) {
            return redirect()->guest('/login/gestionnaire');
        }
        if ($request->is('parent_tuts') || $request->is('parent_tuts /*')) {
            return redirect()->guest('/login/parent_tut');
        }

        return redirect()->guest(route('login'));
    }
}
