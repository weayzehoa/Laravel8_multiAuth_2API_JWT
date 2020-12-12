<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class AdminLoginController extends Controller
{
    //先經過 middleware
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    //顯示 admin.login 視圖
    public function showLoginForm()
    {
        return view('admin.login');
    }
    //登入
    public function login(Request $request)
    {
        // 驗證表單資料
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

        // 將表單資料送去驗證
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //驗證無誤轉入 admin.dashboard
            return redirect()->intended(route('admin.dashboard'));
        }
        // 驗證失敗 返回並拋出表單內容 只拋出 email 與 remember 欄位資料
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    //登出
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
