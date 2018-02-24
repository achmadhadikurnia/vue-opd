<?php

namespace Bantenprov\VueOpd\Http\Middleware;

use Closure;

/**
 * The VueOpdMiddleware class.
 *
 * @package Bantenprov\VueOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class VueOpdMiddleware
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
        return $next($request);
    }
}
