@extends('layouts.auth')

@section('htmlheader_title')
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="lg-box">
        <div class="login-box">
            <div class="login-logo">
                <a href="/home">
                    <img height="70" widht="250" src="{{asset('/img/logo-branca.png')}}" alt="SYSInscrição">
                </a>
            </div><!-- /.login-logo -->

            @if (count($errors) > 0)
            <div class="alert alert-danger">
               <!-- <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br> -->
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <p class="login-box-msg">{{__('adminlte::adminlte.register_message')}}</p>
                    <form action="{{ url('/register') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('adminlte::adminlte.full_name') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="{{ __('adminlte::adminlte.password') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <!-- <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                                </div> -->
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    {{ __('adminlte::adminlte.register') }}
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    @include('auth.partials.social_login')
                    
                    <!-- <a href="{{ url('/password/reset') }}">Esqueceu sua senha?</a><br> -->

                </div><!-- /.login-box-body -->
            </div>
        </div><!-- /.login-box -->
    </div>
    @include('layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });

        $(function () {  // $(document).ready shorthand
            $('#lg-box').hide().fadeIn(1500);

        });
    </script>
</body>
@endsection
