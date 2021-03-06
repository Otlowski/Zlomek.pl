<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">
        <title> Złomek- znajdź swojego grata</title>
        <link rel="stylesheet"  href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--        <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
        <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>-->
        <script src="/js/searchCarVC.js" type="text/javascript"></script>
        <meta http-equiv="Content-type" content="text/html; charset=windows-1250" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

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
                                        <input type="text" class="form-control" placeholder="Szukaj" data-function="search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('/register') }}"><span class=""></span> Zarejestruj się</a></li>
                                    <li><a href="{{ url('/login') }}"><span class=""></span> Zaloguj</a></li>
                                </ul>

                            </div>
                        </div>
                    </nav>



                </header>

                <div id="content">
                    <div class = "primary">
                        <!-- Two -->
                        @foreach($cars as $car)
                        <?php 
                        $junk = $car->junkyard; 
                        ?>
                        <section id="two" class="wrapper alt style2">
                            <section class="spotlight">
                                <div class="image"><img src="/img/ads/{{$car->image}}.jpg"  /></div>
                                <div class="content">
                                    <div class=""></div>
                                    <h2>{{$junk['name']}}</h2>
                                        model: {{$car->car_model}}<br>
                                        cena: {{$car->price}}PLN<br>
                                        rok produkcji: {{$car->production_year}}r.<br>
                                        przebieg: {{$car->mileage}}<br>
                                        paliwo: {{$car->fuel}}<br>
                                        moc: {{$car->power}}<br>
                                        pojemność: {{$car->capacity}}cm^3<br>

                                </div>
                            </section>
                            @endforeach
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