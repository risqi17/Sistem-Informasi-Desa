<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $access_level)
    {
        $user = session()->get('user');

        if (!empty($access_level)) {
            $access_level = explode('-', $access_level);

            if (!in_array($user['level'], $access_level)) {
                if (!empty($user)) {
                    if ($user['level'] == 1) {
                        // redirect ke homepage level 1
                    } else if ($user['level'] == 2) {
                        // redirect ke homepage level 2
                        return redirect('admin/dashboard');
                    } else if ($user['level'] == 3) {
                        // redirect ke homepage level 3
                    }
                } 
            } 
        }

        return $next($request);
    }
}
