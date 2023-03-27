<?php

namespace App\Http\Middleware;

use App\Models\Rating;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingOwner
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
        $user= Auth::user();
        $rating=Rating::findOrFail($request->id);
        
        if($rating->user_id != $user->id){
            return response()->json([
                'messege'=>'data not found'
            ],404);
        }
        return $next($request);
    }
}
