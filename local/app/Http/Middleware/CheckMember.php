<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckMember
{
    public function handle($request, Closure $next)
    {
        if(Session::get('Mem_name') == ""){
            Session::flush();
            return redirect('Login_member');
        }else{
            return $next($request);
        }
    }
}
