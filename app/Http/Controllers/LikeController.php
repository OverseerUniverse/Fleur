<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $sessionId = $request->session()->getId();

        $like = Like::where('session_id', $sessionId)->first();

        if ($like) {
            $like->delete();
            $hasLiked = false;
        } else {
            Like::create(['session_id' => $sessionId]);
            $hasLiked = true;
        }

        $totalLikes = Like::count();

        return response()->json([
            'message' => $hasLiked ? 'Like added' : 'Like removed',
            'total_likes' => $totalLikes,
            'has_liked' => $hasLiked,
        ]);
    }
}
