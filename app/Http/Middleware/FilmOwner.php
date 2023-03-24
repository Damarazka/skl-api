<?php

namespace App\Http\Middleware;

use App\Models\Film;
use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmOwner
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
        // dd("ini menggunakan middleware");

        $currentUser  = Auth::user();
        $post = Film::findOrFail($request->id);

        if ($post -> author != $currentUser->id) {
            return response()->json([
                'message' => 'kamu siapa tod'
            ], 404);
        }

        // return response()->json($currentUser);

        return $next($request);
    }
}