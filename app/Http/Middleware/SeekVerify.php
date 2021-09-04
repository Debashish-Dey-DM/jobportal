<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SeekVerify
{
      /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('type')==0){
            return $next($request);
        }else{
            return redirect('/signin')->with([
                'error' => true,
                'message' => 'Please login first'
            ]);
        }
    }
}
