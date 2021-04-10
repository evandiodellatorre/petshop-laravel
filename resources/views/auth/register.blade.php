<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETSHOP | Registro</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login/register.css') }}">
    <link rel="stylesheet" href="{{ asset('login/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('login/font-awesome.css') }}"/>
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
                        <x-guest-layout>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <fieldset class="clearfix">
                                        <p>
                                            <span class="fa fa-user"></span>
                                            <input id="role" name="role" type="hidden" value="user">
                                            <input id="name" name="name" type="text"  Placeholder="name" style="text-transform:uppercase" autofocus required>
                                        </p>
                                        <p>
                                            <span class="fa fa-envelope"></span>
                                            <input id="email" name="email" type="email"  Placeholder="email" style="text-transform:lowercase" autofocus required>
                                        </p>
                                        <p>
                                            <span class="fa fa-lock"></span>
                                            <input id="password" name="password" type="password"  Placeholder="password" required autocomplete="new-password">
                                        </p>
                                        <p>
                                            <span class="fa fa-lock"></span>
                                            <input id="password_confirmation" name="password_confirmation" type="password"  Placeholder="password_confirmation" required>
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
                        </x-guest-layout>
                        
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>
</html>