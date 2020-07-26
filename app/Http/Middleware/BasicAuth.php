<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = env('BASEAUTH_USER');
        $password = env('BASEAUTH_PASSWORD');

        if ($user == $request->getUser() && $password == $request->getPassword()) {
            return $next($request);
        }

        return response('Login', 401, ['WWW-Authenticate' => 'Basic']);
    }
}
