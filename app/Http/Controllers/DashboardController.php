<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // return new WelcomeEmail(auth()->user());

        // $ideas = Idea::with('user','comments.user')->orderBy('created_at', 'DESC'); // เพิ่ม with ดึงข้อมูล user มาด้วย และ comments.user ดึงข้อมูล user ของ comment มาด้วย เพื่อลดโหลดการดึงข้อมูล

        $ideas = Idea::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $ideas = $ideas->where('content', 'like', '%' . request()->get('search', '') . '%');
        }

        return view('dashboard', [
            'ideas' => $ideas->paginate(5)
        ]);
    }
}

// https://www.youtube.com/watch?v=R58XZ8pAXoE&list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU&index=18
