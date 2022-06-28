<?php namespace App\Http\Middleware;
use Auth;
use Closure;

class administratorRole {
    public function handle($request, Closure $next)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if($user->isAdministrator())
            return $next($request);
        return redirect('login');
    }
}
