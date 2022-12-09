<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Log;

use Closure;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //------------------Basic defining Middleware---------------------------------
    
    //  public function handle($request, Closure $next)
    //  {   
    //      Log::info("Example middleware is working");
    //      return $next($request);
    //  }
    //  }
 // Check output in Lumen logs for /test URI
 //-------------------------------------Adding Parameters-----------------------------------------------
       
//      public function handle($request, Closure $next, $param1, $param2)
//     {   
//         Log::info("Example middleware is working! -{$param1} - {$param2}");
//         return $next($request);
//     }
// }
// Check output in lumen logs after refresh

//-----------------------------Modifying request after further processing------------------
// public function handle($request, Closure $next, $param1, $param2)
// {   
//     $response = $next($request);
//     Log::info("Example middleware is working! -{$param1} - {$param2}");
//     return $response;
// }
// }


















//--------------------------------------------------------------------------------------------------------------------------------------------------

//----------------------------------------Middleware-------------------------------------------------------------------------------------

//-----Middleware-1-----------------------

    public function handle($request, Closure $next)

    {
        Log::info("Example1 middleware is working");  //example 1 /showing in log file

        return $next($request);
    }
//Output- example1 is working ----on localhost
//Example1 middleware working-----on log


// -----Middleware-2---------------------------

    // public function handle($request, Closure $next)
    // {
    //     Log::info("Example2 middleware is working");  //example 2 /showing in log file
    //     return $next($request);
    // }
    // // Output- example2 is working----on localhost
    // Example2 middleware is working---on log

//-----Middleware-3-------------------------------

    // public function handle($request, Closure $next, $parameter1,$parameter2)
    // {
    //     Log::info("Example3 middleware is working -{$parameter1} -{$parameter2}");  //example 3 /showing in log file
    //     return $next($request);
    // }
//Output-example3 is working----on localhost
//Example3 middleware is working -parameter1 -parameter2  ---on log

//------Middleware-4----------------------------------

    // public function handle($request, Closure $next, $parameter1,$parameter2)
    // {
    //     $response= $next($request);
    //     Log::info("Example4 middleware is working -{$parameter1} -{$parameter2}");  //example 4 /showing in log file
    //     return $response;
    // }
    //Output- example4 is working----on localhost
    // Example4 middleware is working -parameter1 -parameter2----on log 


    //-------Middleware-5---------------------------

//     public function handle($request, Closure $next)
//     {
//         Log::info("Example5 middleware is working ");
//         return $next($request);
//     }
//     //Output-exaple5 is working
//     //Example5 middleware is working

//     public function terminate($request, $response)

//     {
//         Log::info("Example5 middleware is terminated!!!!!!!!!!!!!!!!! "); 
// }
}