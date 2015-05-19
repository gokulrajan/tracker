<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminCheck {

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

            if(! Auth::user()->hasRole('admin')){
                abort(403, 'Unauthorized action.');
            }
            /*elseif(Auth::user()->hasRole('user')){
                return redirect('/profile');
            }*/
            //return $next($request);
        }
        else
        {

            return $next($request);
        }
	}

}
