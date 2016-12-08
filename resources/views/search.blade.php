<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">
        <title> Złomek- znajdź swojego grata</title>
        <link rel="stylesheet"  href="css/profil.css">
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
                                    <li><a href="{{ url('/register') }}"><span class=""></span> User Name</a></li>
                                </ul>

                            </div>
                        </div>
                    </nav>



                </header>

                <div id="content">
                    <div class = "primary">
                        <!-- Two -->
                        <section id="two" class="wrapper alt style2">
                            <section class="spotlight">
                                <div class="content">


                                    <div class="box form-inside">
                                        <h1>Wyszukaj ogłoszenie :</h1>

                                        <div class="col-label">
                                            <br><label>Tytuł:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <input type="text" name="title" >
                                            </div>
                                        </div>

                                        <div class="col-label">
                                            <label>Marka:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <select name="password" class="select-model">
                                                    <option value=""></option>
                                                    <option value="Abarth">Abarth</option>
                                                    <option value="Audi">Alfa Romeo</option>
                                                    <option value="Aston Martini">Aston Martin</option>
                                                    <option value="Audi">Audi</option>
                                                    <option value="Bentley">Bentley</option>
                                                    <option value="BMW">BMW</option>
                                                    <option value="Cadillac">Cadillac</option>
                                                    <option value="Chevrolet">Chevrolet</option>
                                                    <option value="Chrysler">Chrysler</option>			 
                                                    <option value="Citroen">Citroen</option>
                                                    <option value="Dacia">Dacia</option>
                                                    <option value="Daewoo">Daewoo</option>
                                                    <option value="Daihatsu">Daihatsu</option>
                                                    <option value="Dodge">Dodge</option>
                                                    <option value="Ferrari">Ferrari</option>
                                                    <option value="Fiat">Fiat</option>
                                                    <option value="Ford">Ford</option>
                                                    <option value="Honda">Honda</option>
                                                    <option value="Fso">Fso</option>
                                                    <option value="Honda">Honda</option>
                                                    <option value="Hyundai">Hyundai</option>
                                                    <option value="Infinity">Infinity</option>
                                                    <option value="Jeep">Jeep</option>
                                                    <option value="Jaguar">Jaguar</option>
                                                    <option value="Kia">Kia</option>
                                                    <option value="Lancia">Lancia</option>
                                                    <option value="Lexus">Lexus</option>
                                                    <option value="Lotus">Lotus</option>
                                                    <option value="Łada">Łada</option>
                                                    <option value="Maserati">Maserati</option>
                                                    <option value="Mazda">Mazda</option>
                                                    <option value="Mercedes">Mercedes</option>
                                                    <option value="Mini">Mini</option>
                                                    <option value="Mitsubishi">Mitsubishi</option>
                                                    <option value="Nissan">Nissan</option>
                                                    <option value="Opel">Opel</option>
                                                    <option value="Peugeot">Peugeot</option>
                                                    <option value="Porshe">Porsche</option>
                                                    <option value="Renault">Renault</option>
                                                    <option value="Saab">Saab</option>
                                                    <option value="Rover">Rover</option>
                                                    <option value="Seat">Seat</option>
                                                    <option value="Skoda">Skoda</option>
                                                    <option value="Smart">Smart</option>
                                                    <option value="Subaru">Subaru</option>
                                                    <option value="Suzuki">Suzuki</option>
                                                    <option value="Toyota">Toyota</option>
                                                    <option value="Trabant">Trabant</option>
                                                    <option value="Volkswagen">Volkswagen</option>
                                                    <option value="Volvo">Volvo</option>


                                                </select> 
                                            </div>
                                        </div>


                                        <div class="col-label">
                                            <label>Model:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <select name="password2" class="select-model">
                                                    <option value=""></option>
                                                    <option value="Corolla">Corolla</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-label">
                                            <label>Rok:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <select name="password" class="select-model">
                                                    <option value=""></option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>



                                                </select> 
                                            </div>
                                        </div>

                                        <div>
                                            <br><div class="add-photo"><button class="button-profil">Wyszukaj grata</button><br>
                                            </div>












                                        </div>
                                    </div>
                            </section>
                        </section>
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