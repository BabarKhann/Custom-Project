<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Register - Custom Project</title>
</head>

<body class="hold-transition register-page">

<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register as a New User</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="input-group mb-3">

                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                           class="form-control{{ $errors->has('first_name') ? ' is-invalid' : ''}}"
                           placeholder="First name"
                    >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback">{{ $errors->first('first_name') }}</span>
                    @endif

                </div>
                <div class="input-group mb-3">

                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                           class="form-control{{ $errors->has('last_name') ? ' is-invalid' : ''}}"
                           placeholder="Last name"
                    >

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback">{{ $errors->first('last_name') }}</span>
                    @endif

                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}"
                           placeholder="Email"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" value="{{ old('password') }}"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : ''}}"
                           placeholder="Password"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" value=""
                           class="form-control" placeholder="Retype password"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                </div>
                <div class="row">
                {{-- <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div> --}}
                <!-- /.col -->
                    <div class="col-4 offset-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
