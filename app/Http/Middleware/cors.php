<?php

namespace App\Http\Middleware;

use Closure;


class CORS {

  
  public function handle($request, Closure $next)
  {
    header("Access-Control-Allow-Origin: *");

    $headers = [
      'Access-Control-Allow-Methods'=>'GET, POST, PATCH, PUT, DELETE, OPTIONS',
      'Access-Control-Allow-Headers'=>$request->header('Access-Control-Request-Headers')
    ];
    if($request->getMethod()==="OPTIONS"){
      return Response::make('OK',200,$headers);
    }
    $response = $next($request);
    foreach ($headers as $key => $value) {
      $response->header($key, $value);
      return $response;
    }

  }
}
