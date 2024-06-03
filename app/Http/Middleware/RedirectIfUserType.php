<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfUserType
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            switch ($user->type) {
                case 'admin':
                    if ($request->path() != 'admin/home') {
                        return redirect('admin/home');
                    }
                    break;
                case 'teacher':
                    if ($request->path() != 'teacher/home') {
                        return redirect('teacher/home');
                    }
                    break;
                case 'student':
                    if ($request->path() != 'student/home') {
                        return redirect('student/home');
                    }
                    break;
                default:
                    if ($request->path() != 'home') {
                        return redirect('home');
                    }
            }
        }

        return $next($request);
    }
}


