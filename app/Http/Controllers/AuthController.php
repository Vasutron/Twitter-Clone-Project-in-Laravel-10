<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {

        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8'
            ]
        );


        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]
        );

        return redirect()->route('dashboard')->with('success', 'Account created successfully!');


    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        $validated = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]
        );

        if(auth()->attempt($validated)){
            request()->session()->regenerate(); // ป้องกันการเปลี่ยนแปลง session ของคนอื่น

            return redirect()->route('dashboard')->with('success', 'เข้าสู่ระบบสำเร็จ!)');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'ไม่พบผู้ใช้ที่ตรงกับอีเมลและรหัสผ่านที่ให้ไว้'
        ]);

    }

    public function logout(){
        auth()->logout();

        request()->session()->invalidate(); // ลบ session ทั้งหมด
        request()->session()->regenerateToken(); // สร้าง token ใหม่

        return redirect()->route('dashboard')->with('success', 'ออกจากระบบสำเร็จ!');
    }
}
