<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Hiển thị form login admin
    public function showLogin()
    {
        return view('admin.login');
    }

    // Xử lý đăng nhập admin
    public function login(Request $request)
    {
        // validate dữ liệu
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // kiểm tra đăng nhập bằng guard admin
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            // đăng nhập thành công
            return redirect()->route('admin.booking.index');
        }

        // đăng nhập thất bại
        return back()->withErrors([
            'username' => 'Sai tài khoản hoặc mật khẩu',
        ])->withInput();
    }

    // Đăng xuất admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
