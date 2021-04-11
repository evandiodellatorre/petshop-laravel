<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PETSHOP | Login</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('login/login.css') }}">
    <link rel="stylesheet" href="{{ asset('login/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="main">
        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset class="clearfix">
                                <p>
                                    <span class="fa fa-envelope"></span>
                                    <input id="email" name="email" type="email" class="@error('email') is-invalid @enderror" Placeholder="E-Mail" style="text-transform:lowercase" autofocus required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:white;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p>
                                    <span class="fa fa-lock"></span>
                                    <input id="password" name="password" type="password" class="@error('email') is-invalid @enderror" Placeholder="password" required autocomplete="current-password">
                                </p>

                                <div>
                                    <span style="width:130px; text-align:left;  display: inline-block;">
                                        @if (Route::has('password.request'))
                                        <a class="small-text" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                                        @endif
                                    </span>
                                    <span style="width:116px; text-align:right;  display: inline-block;">
                                        <input type="submit" value="Login"></span>
                                </div>
                                <div>
                                    <span style="width:130px; text-align:left;  display: inline-block;">
                                        <a class="small-text" href="{{ route('register') }}">Registrar</a>
                                    </span>
                                    <span style="width:116px; text-align:right;  display: inline-block;"></span>
                                </div>
                            </fieldset>
                            <div class="clearfix"></div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <div class="logo">Pet Shop
                        <div class="clearfix"></div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>