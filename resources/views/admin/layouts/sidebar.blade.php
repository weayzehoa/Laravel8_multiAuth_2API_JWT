<aside class="main-sidebar sidebar-dark-primary bg-navy elevation-4">
    <a href=" {{ route('admin.dashboard') }} " class="brand-link bg-navy text-center">
        {{-- <img src="../../img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light  text-yellow">iCarry 後台管理系統</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/noavatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="javascript:" class="d-block">{{ $adminuser->name ?? '' }}</a>
                <a href="javascript:" class="d-block">{{ Auth::user()->email ?? '' }}</a>
            </div>
        </div>
        <nav id="sidebar" class="mt-2 nav-compact">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            首頁管理
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/news') }}" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    最新消息
                                    <span class="right badge badge-danger">10</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/marquees') }}" class="nav-link">
                                <i class="nav-icon fas fa-equals"></i>
                                <p>
                                    跑馬燈
                                    <span class="right badge badge-primary">7</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/carousels') }}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    輪播管理
                                    <span class="right badge badge-info">5</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-header">選單及內容管理</li> --}}
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            選單及內容管理
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="javascript:" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="javascript:" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="javascript:" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="javascript:" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-header">會員管理專區</li>
                <li class="nav-item has-treeview menu-open">
                    <a href="javascript:" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            會員專區
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/members') }}" class="nav-link active">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>會員管理</p>
                                <span class="right badge badge-info">{{ $users_total ?? '' }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/mbposts') }}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>會員文章</p>
                                <span class="right badge badge-info">{{ $posts_total ?? '' }}</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-header">產品管理專區</li>
                <li class="nav-item has-treeview menu-open">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            產品專區
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/products') }}" class="nav-link ">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>產品管理</p>
                                <span class="right badge badge-info">{{ $products_total ?? '' }}</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-header">系統管理專區</li>
                <li class="nav-item has-treeview menu-open">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            系統管理
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- <li class="nav-item">
                            <a href="{{ url('admin/admins') }}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>管理員管理</p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ url('admin/mails') }}" class="nav-link ">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>信件管理</p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ url('admin/mails/sendmail') }}" class="nav-link ">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>發送信件</p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ url('admin/sms/sendsms') }}" class="nav-link ">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>發送簡訊</p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ url('admin/images/upload') }}" class="nav-link ">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>圖片上傳</p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ url('admin/logs') }}" class="nav-link ">
                                <i class="nav-icon far fa-list-alt"></i>
                                <p>維護紀錄</p>
                                <span class="right badge badge-info">{{ $logs_total ?? '' }}</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-header">統計圖表專區</li>
                <li class="nav-item has-treeview">
                    <a href="javascript:" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            統計圖表
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>統計表</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>統計圖</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="javascript:" class="nav-link">
                                <i class="fas fa-chart-line nav-icon"></i>
                                <p>
                                    瀏覽統計
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="javascript:" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>統計表</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:" class="nav-link">
                                        <i class="nav-icon fas fa-chart-bar"></i>
                                        <p>統計圖</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-door-open text-danger"></i>
                        <p>登出 (Logout)</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
