<?php



namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    // app/Http/Middleware/RoleMiddleware.php
    public function handle($request, Closure $next, ...$roles)
    {
        $user = auth()->user();
    
        if ($user && in_array($user->tipoUsuario, $roles)) {
            return $next($request);
        }
    
        return redirect('/');
    }

}
