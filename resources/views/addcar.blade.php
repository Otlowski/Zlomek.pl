<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> Złomek- znajdź swojego grata</title>
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet"  href="css/zarejestruj1.css">
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


                                    <li><a href="#">Dodaj ogłoszenie</a></li>
                                    <li><a href="#">Wyszukaj</a></li>

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



                </header>

                <form class="form-horizontal" method="POST" action="/newcar"> 
                    <div class="h1-addcar">   
                        <p class="h1">Dodaj ogłoszenie :</p>   
                    </div>
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="car_brand">Marka:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="car_brand" placeholder="Wpisz marke">
                        </div>
                    </div>
                    
                   <div class="form-group">

                        <label class="control-label col-sm-2" for="car_model">Model:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="car_model" placeholder="Wpisz model">
                        </div>
                    </div> 
                    
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="mileage">Przebieg:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="mileage" placeholder="Wpisz przebieg">
                        </div>
                    </div> 
                    
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="power">Moc KM:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="power" placeholder="Wpisz moc KM">
                        </div>
                    </div> 
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="capacity">Pojemność:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="capacity" placeholder="Wpisz pojemność">
                        </div>
                    </div>
                    
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="fuel">Rodzaj paliwa:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="fuel" placeholder="Wpisz rodzaj paliwa">
                        </div>
                    </div>
                    

                    <div class="form-group">

                        <label class="control-label col-sm-2" for="price">Cena:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="price" placeholder="Wpisz cene">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="production_year">Rok produkcji:</label>
                        <div class="col-sm-4 production-year"> 
                            <!--<div class="row">-->
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <select class="selectpicker form-control" type="text" name="production_year" for="production_year">
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                        </select>
                                    </div>
                                </div>
                            <!--</div>-->


                            <!--<input type="text" class="form-control" name="production_year" for="production_year" placeholder="rok produkcji">-->
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">

                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" id="Submit" value="Add" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>          




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



