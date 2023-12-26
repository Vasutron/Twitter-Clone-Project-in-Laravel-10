<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class FeedController extends Controller
{

    public function __invoke(Request $request)
    {

        $followingIDs = auth()->user()->followings()->pluck('user_id');

        $ideas = Idea::whereIn('user_id',$followingIDs)->latest();

        if(request()->has('search')){
            $ideas = $ideas->search(request('search', ''));
        }

        return view('dashboard',[
            'ideas' => $ideas->paginate(5)
        ]);
    }
}
