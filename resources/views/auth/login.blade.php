<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Login</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,700,800" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div class="container-fluid">
    <div class="row signin">
        <div class="col-md-6 logo">
            <div class="container p-md-5">
                <form action="{{route('login')}}" method="post">
                @csrf
                <div class="row p-md-5">
                <center><img src="{{asset('assets/Logo.png')}}" alt=""></center>

                <div class="col-12 text-center mt-4">
                    <h3 style="font-weight:bold">Login</h3>
                    <p>Kindly signin to your campus street account</p>
                </div>

                <div class="col-12 mt-4">
                    <label for="">Email Address</label>
                     <input type="email" class="form-control  @error('email') is-invalid @enderror" id="first_name" name="first_name"  value="{{ old('email') }}" placeholder="example@email.com">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="col-12 mt-4">
                    <label for="">Password</label>
                     <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="col-12 mt-4 buttonBlock">
                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    <button type="submit" class="btn btn-block mainColor mt-4">Login</button>
                    <p class="mt-4">Don't have a campus street account? <a href="{{route('register')}}" style="text-decoration: none" class="text-color">Create one now</a></p>

                     {{-- @if (Route::has('password.request'))
                        <a class="btn-link text-color" style="text-decoration: none" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </div>

            </div>
             </form>
            </div>
        </div>
        <div class="col-md-6 d-none d-sm-none d-md-block signin-image">
        </div>
    </div>
</div>
</body>
</html>
