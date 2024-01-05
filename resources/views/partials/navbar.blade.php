<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:radithaar08@gmailcom"><i class="icofont-support-faq mr-2"></i>consultify@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Bandung, Indonesia </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+021-234-567" >
							<span>Hubungi kami : </span>
							<span class="h4">021-xxx-xxx</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="about.php">Consultify<span>.</span></a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active"><a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">Home</a></li>
			    <li class="nav-item"><a class="nav-link  {{ ($title === "artikel") ? 'active' : '' }}" href="artikel.php">Artikel</a></li>
				<li class="nav-item"><a class="nav-link  {{ ($title === "konselor") ? 'active' : '' }}" href="konselor.php">Konselor</a></li>
                <li class="nav-item"><a class="nav-link  {{ ($title === "pemesanan") ? 'active' : '' }}" href="bookingconsult.php">Pemesanan</a></li>
			   <li class="nav-item"><a class="nav-link  {{ ($title === "riwayat") ? 'active' : '' }}" href="riwayat.php">Riwayat</a></li>
			   @auth
				<li>
					<form action="/logout" method="post">
						@csrf
						<button type="submit">Logout</button>
					</form>
				</li>
			   @else
			   	<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
			   @endauth
			</ul>
		  </div>
		</div>
	</nav>
</header>