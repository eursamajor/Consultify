<!-- resources/views/consultation/bookingconsult.blade.php -->

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="consultify.com">

  <title>Consultify - Find Your Happiness Here</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icofont/icofont.min.css') }}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>


<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:radithaar08@gmailcom"><i class="icofont-support-faq mr-2"></i>radithaar08@gmail.com</a></li>
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
			  <li class="nav-item active">
				<a class="nav-link" href="about.php">Home</a>
			  </li>
			    <li class="nav-item"><a class="nav-link" href="artikel.php">Artikel</a></li>
				<li class="nav-item"><a class="nav-link" href="konselor.php">Konselor</a></li>
			   <li class="nav-item"><a class="nav-link" href="riwayat.php">Riwayat</a></li>
			   <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Lakukan pemesanan</span>
          <h1 class="text-capitalize mb-5 text-lg">Janji temu</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Layanan darurat!</span>
              <h2 class="text-color mt-3">+62 789 1256 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Pemesanan janji temu</h2>
            <p class="mb-4">Atur jadwal dengan konselor, pastikan agar datang 30 menit sebelum waktu yang dijadwalkan</p>
               <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="jenis_konsultasi">
                                  <option>Jenis Konsultasi</option>
                                  <option>Karir Pekerjaan</option>
                                  <option>Kesehatan Mental</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="konselor">
                                  <option>Pilih Konselor</option>
                                  <option>Hermawan</option>
                                  <option>Raditha</option>
                                  <option>Rexcel</option>
                                  <option>Dwiko</option>
                                  <option>Miracle</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <a class="btn btn-main btn-round-full" href="pembayaran.php">Lakukan Pemesanan<i class="icofont-simple-right ml-2"></i></a>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Kunjungi media sosial kami untuk dapat melihat info menarik lainnya tentang consultify.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/consultify"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/consultify"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://linkedin/consultify/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Hubungi kami</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Layanan tersedia 24 jam</span>
						</div>
						<h4 class="mt-2"><a href="mailto:radithaar08@gmail.com">radithaar08@gmail.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Layanan Senin s/d Jumat : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+62813-8889-4512</a></h4>
					</div>
				</div>
			</div>
		</div>
		
    <div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Consultify</span>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
   
    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>