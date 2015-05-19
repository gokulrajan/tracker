<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminRouter {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	
	     if(Auth::check()){

                    if(Auth::user()->hasRole('admin')){
                       return redirect('/admin');
                    }
                else if(Auth::user()->hasRole('user')){
                    return redirect('/user');
                }
                    //return $next($request);
                }
                else
                {

                   return $next($request);
                }
    }

	}


