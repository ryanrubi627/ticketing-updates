<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>




<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">



<!-- REGISTER -->
<br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <!--<div class="col-md-8">-->
            <!--<div class="card">-->

                <!--<div class="card-body">-->
                    <form method="POST" action="{{ route('register') }}">

                        @csrf
                        <h2>Do not have account yet ?</h2><br>
                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" hidden>{{ __('Name') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="name" placeholder="Name.." type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right" hidden>{{ __('E-Mail Address') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="email" placeholder="E-Mail Address.." type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right" hidden>{{ __('Password') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="password" placeholder="Password.."type="password" size="65" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-form-label text-md-right" hidden>{{ __('Confirm Password') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="password-confirm" placeholder="Confirm Password.."type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <!--</div>-->
                        </div>

                        <div class="form-group row mb-0">
                            <!--<div class="col-md-6 offset-md-4">-->
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            <!--</div>-->
                        </div>
                    </form>
               <!-- </div>-->
            <!--</div>-->
        <!--</div>-->
    </div>
</div>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
</div>


<!--login-->

<div class="col-md-3" id="col-md-3">

<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <!--<div class="col-md-8">-->
            <!--<div class="card">-->


                <!--<div class="card-body">-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="h2-1">Log in</h2><br>
                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right" hidden>{{ __('E-Mail Address') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="email" placeholder="E-Mail Address.." size="45" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right" hidden>{{ __('Password') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="password" placeholder="Password.." type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <div class="form-group row">
                            <!--<div class="col-md-6 offset-md-4">-->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label h2-1" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                <!--</div>-->
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <!--<div class="col-md-8 offset-md-4">-->
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            <!--</div>-->
                        </div>
                    </form>
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    </div>
</div>


        </div>
    </div>
</div>
    </body>
</html>
