<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">
        <title> Złomek- znajdź swojego grata</title>
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet"  href="css/zarejestruj.css">
        <meta http-equiv="Content-type" content="text/html; charset=windows-1250" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    </head>


    <body>
        <div id= "grad">
            <div id= "page">
                <header>
                    <div id = "logo">
                        <img src ="img/banner.jpg">
                    </div>
                    <!-- Navbar -->
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
                                <a class="navbar-brand active" href="/">Mój Złomek</a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">


                                    <li><a href="/addcar">Dodaj ogłoszenie</a></li>
                                    <li><a href="/search">Wyszukaj</a></li>

                                </ul>
                                <form class="navbar-form navbar-left">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Szukaj">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('/register') }}"><span class="active"></span> Zarejestruj się</a></li>
                                    <li><a href="{{ url('/login') }}"><span class=""></span> Zaloguj</a></li>
                                </ul>

                            </div>
                        </div>
                    </nav>

                    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

                </header>

                <div id="content">
                    <div class = "primary">
                        <!-- Two -->
                        <section id="two" class="wrapper alt style2">
                            <section class="spotlight">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                Zapomniałeś hasła?
                                            </a>
                                        </div>
                                    </div>
                                </form>

                                </div>
                                <div class = "secondary">

                                </div>
                                </div>


                                <!-- Footer -->
                                <footer id="footer">
                                    <ul class="clear">

<!--				<li><a href="https://www.facebook.com/krystian.liris" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
<li><a href="https://www.instagram.com/lirek93/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>-->

                                    </ul>
                                    <ul class="copyright">
                                        <li>&copy; Untitled</li><li>Design: <a href="#">Krystian Niko Liris & Maciej Majewski & Maciej Otłowski</a></li>
                                    </ul>
                                </footer>

                                </div>	
                                </div>	
                                </body>


                                </html>