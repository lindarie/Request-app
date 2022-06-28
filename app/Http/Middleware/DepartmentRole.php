<?php namespace App\Http\Middleware;
use Auth;
use Closure;

class departmentRole {
    public function handle($request, Closure $next)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if($user->isDepartment())
            return $next($request);
        return redirect('login');
    }
}
