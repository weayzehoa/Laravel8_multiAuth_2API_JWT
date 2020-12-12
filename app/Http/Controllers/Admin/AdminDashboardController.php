<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use View;

class AdminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     * 進到這個控制器需要透過middleware檢驗是否為後台的使用者
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * 顯示 dashboard.
     * 並將 使用者的資料拋出
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $adminuser = Auth::user();
        return View::make('admin.dashboard', compact('adminuser'));
    }
}
