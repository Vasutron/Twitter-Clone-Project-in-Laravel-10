<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ideas = Idea::orderBy('created_at', 'DESC');

        if(request()->has('search')){
            $ideas = $ideas->where('content','like', '%' . request()->get('search',''). '%');
        }

        return view('dashboard',[
            'ideas' => $ideas->paginate(5)
        ]);
    }

}

// https://www.youtube.com/watch?v=R58XZ8pAXoE&list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU&index=18
