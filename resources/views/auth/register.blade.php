<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PETSHOP | Registro</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('login/register.css') }}">
    <link rel="stylesheet" href="{{ asset('login/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="main">
        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">
                        <fieldset class="clearfix">
                            <div class="logo">PetShop
                                <div class="clearfix"></div>
                            </div>
                        </fieldset>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <fieldset class="clearfix">
                                <p>
                                    <span class="fa fa-user"></span>
                                    <input id="role" name="role" type="hidden" value="user">
                                    <input id="name" name="name" type="text" Placeholder="name" style="text-transform:uppercase" autofocus required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:white;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p>
                                    <span class="fa fa-envelope"></span>
                                    <input id="email" name="email" type="email" Placeholder="email" style="text-transform:lowercase" autofocus required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:white;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p>
                                    <span class="fa fa-lock"></span>
                                    <input id="password" name="password" type="password" Placeholder="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:white;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                                <p>
                                    <span class="fa fa-lock"></span>
                                    <input id="password_confirmation" name="password_confirmation" type="password" Placeholder="password_confirmation" required>
                                </p>

                                <div>
                                    <span style="width:130px; text-align:left;  display: inline-block;">
                                        <a class="small-text" href="/">Login</a>
                                    </span>
                                    <span style="width:116px; text-align:right;  display: inline-block;">
                                        <input type="submit" value="Registrar">
                                    </span>
                                </div>
                            </fieldset>
                            <div class="clearfix"></div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>