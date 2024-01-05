@extends('layouts.main')
@section('container')

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">Selamat datang, {{"$name"}}</span>
					<h1 class="mb-3 mt-3">Consultify</h1>
					
					<p class="mb-4 pr-5">Consultify adalah web inovatif yang dirancang khusus untuk memberikan bimbingan konseling online yang holistik mengenai kesehatan mental dan pengembangan karir. Aplikasi ini menggabungkan keahlian profesional di bidang konseling dengan teknologi canggih untuk memberikan pengguna pengalaman pribadi yang mendalam dan relevan.</p>
					<div class="btn-container ">
						<a href="bookingconsult.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Lakukan Pemesanan <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Jam Servis</span>
						<h4 class="mb-3">Pemesanan Online</h4>
						<p class="mb-4">Aplikasi selalu siap sedia 24 Jam</p>
						<a href="bookingconsult.php" class="btn btn-main btn-round-full">Lakukan Pemesanan</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Jadwal Konsultasi</span>
						<h4 class="mb-3">Jam Kerja</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Senin - Rabu : <span>8:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Kamis - Jumat : <span>9:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Sabtu - Minggu : <span>10:00 - 17:00</span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Bantuan Darurat</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Bisa hubungi nomor di atas untuk keadaan darurat</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="images/about/img-1.jpg" alt="" class="img-fluid">
					<img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Mental yang sehat, Karir yang baik</h2>
					<p class="mt-4 mb-5">Kami selalu meberikan pelayanan terbaik untuk mental yang sehat dan karir yang baik.</p>

					<a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Coba Sekarang<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">1</span>k
						<p>Pengguna puas</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">50</span>+
						<p>Konselor Kesehatan mental</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">100</span>+
						<p>Konselor Karir Pekerjaan</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">20</span>+
						<p>Negara Pengguna</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				
			</div>
			<div class="col-lg-6 col-md-10 ">
				/form>
            </div>
			</div>
		</div>
	</div>
</section>
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Kami telah melayani lebih dari 1000 pengguna</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Mari dengarkan apa kata pengguna consultify sebelumnya</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Layanan yang luar biasa!</h4>
						<span>John Partho</span>
						<p>
							Consultify menyediakan layanan yang luar biasa baik dari web hingga responsivitas para konselornya
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Konselor Berkualitas Tinggi</h4>
						<span>Mullar Sarth</span>
						<p>
						Salah satu keunggulan utama MindCare adalah ketersediaan konselor yang berkualitas tinggi. Saya merasa didengar dan didukung oleh seorang profesional yang terlatih setiap kali melakukan sesi konseling. Mereka merespons dengan empati dan memberikan pandangan yang berharga.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Antarmuka Intuitif dan Ramah Pengguna</h4>
						<span>Kolis Mullar</span>
						<p>
						MindCare memiliki antarmuka yang sangat mudah dipahami. Proses pendaftaran, penjadwalan sesi, dan akses ke materi bacaan tambahan semuanya terintegrasi dengan baik. Ini membantu menciptakan pengalaman pengguna yang mulus.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Privasi yang Dijaga dengan Ketat</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
						Saya merasa aman dengan kebijakan privasi MindCare. Semua sesi konseling dilindungi secara aman, dan informasi pribadi saya dijaga dengan sangat baik. Ini memberikan kepercayaan diri tambahan untuk berbicara secara terbuka.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Beragam Metode Konseling</h4>
						<span>Kolis Mullar</span>
						<p>
						Aplikasi ini menyediakan berbagai metode konseling, termasuk teks, panggilan suara, dan video. Fleksibilitas ini memungkinkan saya memilih metode yang paling sesuai dengan kenyamanan saya.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>


	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection