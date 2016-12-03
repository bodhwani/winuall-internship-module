<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Contracts\Auth\Guard;
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c

class RedirectIfAuthenticated
{
    /**
<<<<<<< HEAD
=======
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
<<<<<<< HEAD
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
=======
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
            return redirect('/');
        }

        return $next($request);
    }
}
