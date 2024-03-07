<?php

namespace App\Http\Middleware;

use App\Models\VisitorDetection;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $ipAddress = $request->ip();

        // Periksa apakah alamat IP sudah ada dalam database
        $existingVisitor = VisitorDetection::where('ip_address', $ipAddress)->first();

        if (!$existingVisitor) {
            // Simpan data pengunjung ke dalam database
            VisitorDetection::create([
                'ip_address' => $ipAddress,
            ]);
        }

        return $next($request);
    }
}
