<?php

namespace App\Http\Middleware;

use App\Models\WebsiteVisitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if ($request->path() == 'dashboardkbc') {
            WebsiteVisitor::create([
                'url' => $request->fullUrl(),
                'created_at' => now(),
            ]);
        }
    
        return $next($request);
    }
}
