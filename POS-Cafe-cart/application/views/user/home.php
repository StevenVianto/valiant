    <style type="text/css">
      #home .jumbotron{
        background-image: url(<?=base_url('assets/images/bg.jpg')?>);
        background-size: cover;
        background-attachment: fixed;
        height: 580px;
        position: relative;
        z-index: 1;
      }
      #home .jumbotron .container{
        position: relative;
        z-index: 3;
      }
      #home .jumbotron::after{
        content:'';
        display: block;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to bottom, rgba(0,0,0,.5), rgba(0,0,0,0));
        position: absolute;
        bottom: 0;
        z-index: 2;
      }
      #favorit{
        background-image: url(<?=base_url('assets/images/2.jpg')?>);
        background-size: cover;
        padding-bottom: 90px;
      }
    </style>


    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/1homepage.webp);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Selamat Datang</span>
						<h1 class="mb-4">Rasakan Keunikan di Tengah Koleksi Antik</h1>
						<p class="mb-4 mb-md-5">Rubeka Cafe menyajikan kopi terbaik dengan ruang luas dan koleksi
							antik. Suasana hangatnya sempurna untuk bersantai dengan sentuhan klasik.</p>
						<p><a href="<?php base_url(); ?>assets/Rubeka_Cafe/foto.html" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-6">Lihat
								Foto</a></p>
					</div>


				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/2homepage.webp);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Selamat Datang</span>
						<h1 class="mb-4">Perpaduan Cita Rasa, Keunikan, dan Kenyamanan</h1>
						<p class="mb-4 mb-md-5">Rubeka Cafe Tempat nyaman yg menyediakan suasana hangat yg bagus untuk
							mengerjakan tugas, belajar dan tentunya bersantai </p>
						<p><a href="<?php base_url(); ?>assets/Rubeka_Cafe/menu.html" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-6">Cek
								Menu</a></p>
					</div>


				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/3homepage.webp);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Selamat Datang</span>
						<h1 class="mb-4">Menikmati Sensasi Kopi Terbaik</h1>
						<p class="mb-4 mb-md-5">Rasakan aroma kaya dan cita rasa luar biasa dari kopi premium, pas
							banget buat nemenin perjalanan seru kamu di setiap tegukan.</p>
						<p><a href="<?php base_url(); ?>assets/Rubeka_Cafe/menu.html" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-6">Cek
								Menu</a></p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-about d-md-flex">
		<div class="one-half img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/about.jpg);"></div>
		<div class="one-half ftco-animate" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/story.webp);">
			<div class="body-section ftco-animate ">
				<div class="overlap">
					<div class="heading-section ftco-animate ">
						<span class="subheading">Apa itu</span>
						<h2 class="mb-4">Rubeka Cafe</h2>
					</div>
					<div>
						<p>Rubeka Cafe, yang terletak di Batam, berawal dari Rumah Barang Bekas, sebuah toko barang
							bekas
							yang penuh dengan harta karun. Seiring berjalannya waktu, tempat ini bertransformasi menjadi
							tempat yang nyaman di mana masa lalu bertemu dengan kreativitas. Dihiasi dengan barang antik
							dan
							karya seni, Rubeka bukan hanya sebuah kafe, tetapi juga sebuah galeri dan panggung bagi para
							seniman lokal. Dengan aroma kopi segar dan kehangatan suasana yang unik, setiap kunjungan
							terasa
							seperti memasuki sebuah cerita. Rubeka adalah tempat di mana kenangan dibuat, memadukan
							nostalgia dengan kreativitas dan sebuah permata abadi di jantung kota Batam.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services">
		<div class="container">
			<!-- New Title -->
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">kenapa Harus Rubeka?</h2>
					<p>Kami hadir untuk memberikan pengalaman minum kopi terbaik dengan layanan yang cepat, kenyamanan,
						dan kualitas premium.</p>
				</div>
			</div>
			<!-- Services Content -->
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-choices"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Mudah Dipesan</h3>
							<p>Pesan Kopi atau Makanan Anda dengan mudah, melalui situs web kami, kapan saja dan di mana
								saja</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<!-- Saya mau flaticon jadi waiter atau pelayan -->
							<img src="<?php base_url(); ?>assets/Rubeka_Cafe/waiter-serving-a-drink-on-a-tray-svgrepo-com (2).svg" width="70px" />
						</div>
						<div class="media-body">
							<h3 class="heading">Layanan Pengantaran Cepat</h3>
							<p>Pengantaran langsung ke meja Anda dengan cepat, sehingga Anda bisa menikmati kopi tanpa
								menunggu terlalu lama</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-coffee-bean"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Kopi Berkualitas</h3>
							<p>Kopi premium yang terbuat dari biji kopi pilihan, dibuat dengan dedikasi untuk kualitas
								terbaik
								setiap cangkir.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/men1u.jpg); background-size: cover;">
		<div class="container">

			<div class="row align-items-center">
				<div class="col-md-6 pr-md-5">
					<div class="heading-section text-md-right ftco-animate"
						style="background-color: rgba(0, 0, 0, 0.893); padding: 50px;">
						<span class="subheading">Telusuri</span>
						<h2 class="mb-4">Menu Kami</h2>
						<p class="mb-4">Kami Mengundang Anda untuk menjelajahi berbagai pilihan makanan dan minuman
							yang tersedia di Rubeka Cafe. Setiap hidangan disiapkan dengan cermat, menghadirkan cita
							rasa yang menggugah selera dan memuaskan. Dari kopi yang disajikan dengan sempurna hingga
							pilihan makanan yang lezat, setiap item dalam menu kami dirancang untuk memberikan
							pengalaman kuliner yang tak terlupakan. Nikmati berbagai pilihan yang kami tawarkan, yang
							siap memanjakan lidah Anda.</p>
						<p><a href="<?php base_url(); ?>menu" class="btn btn-primary btn-outline-primary px-4 py-3">Cek Semua
								Menu</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<!-- Foto best seller nanti -->
						<div class="col-md-6">
							<div class="menu-entry">
								<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-1.jpg);"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-entry mt-lg-4">
								<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-2.jpg);"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-entry">
								<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-3.jpg);"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-entry mt-lg-4">
								<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-4.jpg);"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/men1u.jpg); background-size: cover;">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Telusuri</span>
					<h2 class="mb-4">Kopi Favorit Rubeka</h2>
					<p> Kopi terbaik yang kami sajikan dengan cita rasa khas. Diberikan sentuhan istimewa, setiap
						tegukan menawarkan kelezatan yang memanjakan lidah. Nikmati kehangatan dan keunikan kopi pilihan
						kami di setiap kunjungan anda.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-1.jpg);"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">Coffee Capuccino</a></h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<p class="price"><span>Rp. 23.000</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-2.jpg);"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">Coffee Amerikano</a></h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<p class="price"><span>Rp. 27.000</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-3.jpg);"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">Creamy Bliss</a></h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<p class="price"><span>Rp. 30.000</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/menu-4.jpg);"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">Foam Bliss</a></h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<p class="price"><span>Rp. 40.000</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="<?php base_url(); ?>assets/Rubeka_Cafe/gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/gallery-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php base_url(); ?>assets/Rubeka_Cafe/gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/gallery-2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php base_url(); ?>assets/Rubeka_Cafe/gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/gallery-3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php base_url(); ?>assets/Rubeka_Cafe/gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/gallery-4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(<?php base_url(); ?>assets/Rubeka_Cafe/images/bg_1.jpg);"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Customers Says</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts.</p>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
								almost unorthographic life One day however a small.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="<?php base_url(); ?>assets/Rubeka_Cafe/images/person_1.jpg" alt="">
							</div>
							<div class="name align-self-center">Louise Kelly <span class="position">Illustrator
									Designer</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
								almost unorthographic life One day however a small line of blind text by the name of
								Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="<?php base_url(); ?>assets/Rubeka_Cafe/images/person_2.jpg" alt="">
							</div>
							<div class="name align-self-center">Louise Kelly <span class="position">Illustrator
									Designer</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
								almost unorthographic life One day however a small line of blind text by the name.
								&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="<?php base_url(); ?>assets/Rubeka_Cafe/images/person_3.jpg" alt="">
							</div>
							<div class="name align-self-center">Louise Kelly <span class="position">Illustrator
									Designer</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
								almost unorthographic life One day however.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="<?php base_url(); ?>assets/Rubeka_Cafe/images/person_2.jpg" alt="">
							</div>
							<div class="name align-self-center">Louise Kelly <span class="position">Illustrator
									Designer</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
								almost unorthographic life One day however a small line of blind text by the name.
								&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="<?php base_url(); ?>assets/Rubeka_Cafe/images/person_3.jpg" alt="">
							</div>
							<div class="name align-self-center">Louise Kelly <span class="position">Illustrator
									Designer</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="video">
		<div style="overflow: hidden;">
			<div class="video-content position-relative open-up" data-aos="zoom-out">
				<div class="video-bg">
					<img src="<?php base_url(); ?>assets/Rubeka_Cafe//images/story.webp" alt="video" class="video-image img-fluid">
				</div>
				<div class="video-player position-left">
					<a class='youtube' href="https://youtu.be/q-RgSIH7E58?si=pYorRRR-UQcodjZl">
						<iconify-icon icon="ion:play-sharp" class="video-icon p-5"></iconify-icon>
					</a>
				</div>
			</div>
		</div>
	</section>

  <section class="ftco-appointment">
			<div class="overlay"></div>
			<div class="container-wrap">
				<div class="row no-gutters d-md-flex align-items-center">
					<div class="col-md-6 d-flex align-self-stretch" style="margin-right: -5rem;">
						<div style="padding-top: 5%; padding-bottom: 5%; padding-left: 5%;">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.059295767372!2d104.02176037472414!3d1.1176243988716714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989417d15dc47%3A0x1ec7be23cd9b0509!2sRubeka%20Rumah%20Pamer%20dan%20Kopi!5e0!3m2!1sid!2sid!4v1732529410416!5m2!1sid!2sid"
								width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

					<div class="col-md-6 appointment ftco-animate">
						<form action="#" class="appointment-form">
							<div class="d-md-flex">
								<div class="row no-gutters">
									<div class="col-md-12 d-flex ftco-animate">
										<div class="icon"><span class="icon-phone"></span></div>
										<div class="text">
											<h3> +62 878 4199 0650</h3>
											<p>For Reservation.</p>
										</div>
									</div>
									<div class="col-md-12 d-flex ftco-animate">
										<div class="icon"><span class="icon-my_location"></span></div>
										<div class="text">
											<h3>Ruko Imperium B25-26 Batam</h3>
											<p> Indonesia , Kepulauan Riau , Batam. </p>
										</div>
									</div>
									<div class="col-md-12 d-flex ftco-animate">
										<div class="icon"><span class="icon-clock-o"></span></div>
										<div class="text">
											<h3>Open Monday-Friday</h3>
											<p>10.00 AM -11.00 PM</p>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</section>
