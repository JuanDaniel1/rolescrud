<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Auth;


class Soloadmin
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
            if(Auth::user()->fullacces=='yes'):
                return $next($request);
            endif;
                if(Auth::user()->fullacces=='no'):
                    return redirect('user');
                endif;
                    if(Auth::user()->fullacces=='nop'):
                        return redirect('hacker');
                    endif;
    
    }
}
