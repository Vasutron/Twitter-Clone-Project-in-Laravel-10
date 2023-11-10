<?php

namespace App\Http\Controllers;
use App\Models\Idea;
use Illuminate\Http\Request;
use App\Models\User;

class IdeaLikeController extends Controller
{
    public function like(Idea $idea) {
        $liker = auth()->user();

        $liker->likes()->attach($idea);

        return redirect()->route('dashboard')->with('success','ถูกใจ MergeMix! '.$idea->user->name);

    }

    public function unlike(Idea $idea) {
        $liker = auth()->user();

        $liker->likes()->detach($idea);

        return redirect()->route('dashboard')->with('success','เลิกถูกใจ MergeMix! '.$idea->user->name);
    }
}
