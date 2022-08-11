<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware\Log;

class dataLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentDate = Carbon::now();
        $timeStart = microtime(true);

        $response = $next($request);

        $timeEnd = microtime(true);

        //kod po

        Log::info($currentDate . ' :AFTER: ' . $timeEnd);

        return $response;
    }
}
