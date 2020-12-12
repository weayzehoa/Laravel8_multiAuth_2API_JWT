<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>後台管理系統 | 登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/Font-Awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.custom.css') }}">
</head>

<body class="hold-transition login-page bg-navy" style="background-image: url({{ asset('img/bg.jpg') }});">
    {{-- alert訊息 --}}
    @include('admin.layouts.alert_message')
    <div class="login-box">
        <div class="login-logo">
            <a href="javascript:" class="text-yellow"><b>iCarry 測試用<br>後台管理系統</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">請輸入 Email 與 密碼</p>
                <form action="{{ route('admin.login.submit') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" placeholder="Email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" placeholder="Password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    {{-- <div class="row mb-3">
                        <div class="col-7">
                            <input type="text" id="captchacode" name="captchacode" placeholder="Captcha" class="form-control {{ $errors->has('captchacode') ? ' is-invalid' : '' }}" required >
                            @if ($errors->has('captchacode'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('captchacode') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-5">
                            <img src="/admin/captcha" alt="點擊刷新" onclick="this.src='/admin/captcha?captchacode='+Math.random()">
                        </div>
                    </div> --}}
                    {{-- <div class="col-12 mb-3">
                        {!! no_captcha()->script()->toHtml() !!}
                        {!! no_captcha()->display() !!}
                        @if ($errors->has('g-recaptcha-response'))
                        <span class="text-danger" role="">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                        @endif
                    </div> --}}
                    <div class="row">
                        <div class="col-4">
                            <div class="icheck-primary">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    記住我
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="{{ url('/') }}" type="button" class="btn btn-info btn-block">回前台</a>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">登入</button>
                        </div>
                    </div>
                </form>
                {{-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> --}}
            </div>
        </div>
    </div>
    <div id="particles-js"></div>

    {{-- REQUIRED SCRIPTS --}}
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    {{-- VincentGarreau/particles.js --}}
    <script src="{{ asset('vendor/particles.js/particles.min.js') }}"></script>
    <script src="{{ asset('js/admin.common.js') }}"></script>
    {{-- 背景動畫 --}}
    <script>
        particlesJS.load('particles-js', "{{ asset('./js/particles.json') }}");
    </script>
</body>

</html>
