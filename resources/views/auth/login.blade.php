@extends('layouts.auth')

@section('htmlheader_title')
@endsection

@section('content')
<body class="hold-transition login-page" style="min-height: 466px;">
    <div class="login-box" id="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Psico</b>Educa</a>
        
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
                <p class="login-box-msg">{{__('adminlte::adminlte.login_message')}}</p>
                <form action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="{{ __('adminlte::adminlte.email') }}" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="{{ __('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type=submit class="btn btn-block btn-primary btn-flat">
                                <span class="fas fa-sign-in-alt"></span>
                                {{ __('adminlte::adminlte.sign_in') }}
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    <a href="{{ url('/register') }}" class="text-center">{{ __('adminlte::adminlte.register_a_new_membership') }}</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    @include('layouts.partials.scripts_auth')

    <script>
        $(function () {  // $(document).ready shorthand
            $('#login-box').hide().fadeIn(1500);

        });
    </script>
</body>

@endsection
