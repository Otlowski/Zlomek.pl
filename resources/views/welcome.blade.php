<!DOCTYPE html>
<html>

<head>

	<meta charset = "utf-8">
	<title> Złomek- znajdź swojego grata</title>
        <link rel="stylesheet"  href="/css/style.css">
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
				<a class="navbar-brand active" href="#">Zlomek</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Page 1-1</a></li>
					<li><a href="#">Page 1-2</a></li>
					<li><a href="#">Page 1-3</a></li>
				</ul>
					</li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
				</ul>
			<form class="navbar-form navbar-left">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-btn">
				<button class="btn btn-default" type="submit">
				<i class="glyphicon glyphicon-search"></i>
				</button>
				</div>
				</div>
			</form>
                            @if (Route::has('login'))
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
                            @endif
			</div>
			</div>
			</nav>
  


		</header>
		
		<div id="content">
			<div class = "primary">
			<!-- Two -->    @foreach($cars as $car)
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
                                                    <div class="image"><img src="/img/fiat.jpg" alt="" /></div><div class="content">
                                                        <div class=""></div>
                                                        <h2>{{$car->car_brand}}</h2>
                                                        <h4>model: {{$car->car_model}}</h4>
                                                        <h4>cena: {{$car->price}}PLN</h4>
                                                        <h4>rok produkcji: {{$car->production_year}}r.</h4>
                                                        <h4>przebieg: {{$car->mileage}}</h4>
                                                        <h4>paliwo: {{$car->fuel}}</h4>
                                                        <h4>moc: {{$car->power}}</h4>
                                                        <h4>pojemność: {{$car->capacity}}cm^3</h4>
<!--								<h2>Samochód<br />
								Roku</h2>
								<p>Fiat 126 (centoventisei) – samochód osobowy skonstruowany w zakładach FIAT, produkowany we Włoszech w latach 1972–1980, a w Polsce od 6 czerwca 1973 do 22 września 2000 roku (Polski Fiat 126p)[1]. Polska wersja licencyjna produkowana była przez Fabrykę Samochodów Małolitrażowych „Polmo” Bielsko-Biała w Bielsku-Białej oraz w Tychach.</p>-->
							</div>
						</section>
                                            @endforeach
						<section class="spotlight">
							<div class="image"><img src="img/fiatt.jpg" alt="" /></div><div class="content">
								<h2>Samochód<br />
								Miesiąca</h2>
								<p>Polski Fiat 125p – samochód osobowy klasy średniej produkowany w Polsce w FSO w Warszawie od 1967 do 1991 roku na podstawie licencji włoskiej firmy FIAT. Po wygaśnięciu licencji w 1983 roku nazwę zmieniono na FSO 125p. Spotykane są też oznaczenia FSO 1300/1500.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="img/manta.jpg" alt="" /></div><div class="content">
								<h2>Samochód<br />Dnia
								</h2>
								<p>Opel Manta – sportowy samochód osobowy z dwudrzwiowym nadwoziem typu coupé produkowany przez niemiecką firmę Opel w latach 1970–1988.</p>
							</div>
						</section>
					</section>
			</div>
			<div class = "secondary">
			dodatkowa zawartosc
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