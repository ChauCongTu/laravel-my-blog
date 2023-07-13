<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('admin'));
        }
        return view('auth.login');
    }
    public function handleLogin(Request $request)
    {
        $error = null;
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Vui lòng nhập địa chỉ email',
                'email.email' => 'Địa chỉ email không hợp lệ',
                'password.required' => 'Vui lòng nhập mật khẩu'
            ]
        );
        if (User::where('email', $request->email)->count() > 0) {
            $userHasEmail = User::where('email', $request->email)->first();
            if (Hash::check($request->password, $userHasEmail->password)) {
                $user = User::find(1);
                Auth::login($user);
                return redirect(route('admin'));
            } else {
                return back()->with('error', 'Mật khẩu không chính xác!');
            }
        } else {
            return back()->with('error', 'Địa chỉ email không tồn tại!');
        }
    }
}
