<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Contracts\Auth\Guard;
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c

class Authenticate
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
     * Create a new middleware instance.
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
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
=======
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
            }
        }

        return $next($request);
    }
}
