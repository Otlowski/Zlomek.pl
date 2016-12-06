@extends('layouts.app')

@section('content')
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
        <!--<div id= "grad">-->
        <div id= "page">


            <div id="content">
                <div class = "primary">

                    <section id="two" class="wrapper alt style2"> 
                        <section class="spotlight">
                           
                            <div class="image"><img src="img/{{Auth::user()->photo}}.jpg" alt="" /></div><div class="content">
                                <div class="row-form">

                                    <div class="add-photo"><button class="button-profile">Dodaj avatar</button><br>
                                    </div>

                                    <div class="col-label">
                                        <br><label>Email:</label>
                                    </div>
                                    <div class="col-inputs">
                                        <div class="input border">
                                            <input type="text" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                            
                                        </div>
                                    </div>

                                    <div class="col-label">
                                        <label>Hasło:</label>
                                    </div>
                                    <div class="col-inputs">
                                        <div class="input border">
                                            <input type="text" name="password" placeholder="Hasło">
                                        </div>
                                    </div>


                                    <div class="col-label">
                                        <label>Nowe Hasło:</label>
                                    </div>
                                    <div class="col-inputs">
                                        <div class="input border">
                                            <input type="text" name="password2" placeholder="Nowe Hasło">
                                        </div>
                                    </div>

                                    <div>
                                        <br><div class="add-photo"><button class="button-profile">Edytuj konto</button><br>
                                        </div>

                                        <div class="line"></div>
                                        <div class="col-label">
                                            <label>Imię:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <input type="text" name="email" placeholder="Imię" value = "{{ Auth::user()->firstname }}">
                                            </div>
                                        </div>


                                        <div class="col-label">
                                            <label>Nazwisko:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <input type="text" name="drugieimie" placeholder="Drugie Imie" value="{{ Auth::user()->surname }}">
                                            </div>
                                        </div>


                                        <div class="col-label">
                                            <label>Numer Telefonu:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <input type="text" name="number" placeholder="numer"value="{{ Auth::user()->phone_number }}">
                                            </div>
                                        </div>

                                        <div class="col-label">
                                            <label>Adres:</label>
                                        </div>
                                        <div class="col-inputs">
                                            <div class="input border">
                                                <textarea class ="address-input"  name="number" >{{ Auth::user()->location }}</textarea>
                                            </div>
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
        <!--</div>-->	
    </body>


</html>
@endsection
