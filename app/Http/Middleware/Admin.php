<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
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

        $user = Auth::user();
        if($user && $user->privilegi==2)
        return $next($request);



        

        return redirect('/login');
    }
}
