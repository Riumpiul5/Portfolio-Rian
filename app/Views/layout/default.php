
<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PORTO FOLIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="<?=base_url()?>/assets/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="<?=base_url()?>/assets/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?=base_url()?>/assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight" style="background: #696969;
		box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px;">
			<div class="text-center">
				<div class="author-img" style="background-image: url(<?=base_url()?>/assets/images/profile.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html">RIAN HIDAYATULLOH</a></h1>
				<span class="position"><a href="#">WEB DEVELOPMENT</a> in Sukabumi City</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="<?php echo base_url('/guestbook'); ?>" data-nav-section="guestbook">guestbook</a></li>
						<li><a href="<?php echo base_url('/contact'); ?>" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright <script>document.write(new Date().getFullYear());</script> Tugas UTS 2024. All rights reserved.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </small></p>
				<ul>
					<li><a href="#"><i style=" color: #3b5998; color: #2d4373;" class="icon-facebook2"></i></a></li>
					<li><a href="https://www.instagram.com/hidayatulloh_yan?igsh=MXI2NTh4aTBxd2cwdw==" target="_blank"><i style=" color: #e4405f; color: #bc2a8d;" class="icon-instagram"></i></a></li>
					<li><a href="https://github.com/Riumpiul5" target="_blank"><i class="icon-github"></i></a></li>
					<li><a href="https://wa.me/qr/WIXOPHCOFGBPM1" target="_blank"><i class="icon-whatsapp"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(<?=base_url()?>/assets/images/profile-bg1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>Hi! <br>Saya Rian Hidayatulloh</h1>
						   					<h2>Saya kuliah di Universitas Muhammadiyah Sukabumi, program Studi Teknik Informatika <a href="https://colorlib.com/"</a></h2>
												<p><a class="btn btn-primary btn-learn"  href="assets/files/my_cv.pdf" download="my_cv.pdf">Download CV <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?=base_url()?>/assets/images/img-bg2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>I am <br>Web Development</h1>
												<h2>Dibidang teknologi Informatika <a href="https://colorlib.com/" </a></h2>
												<p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Us</span>
										<h2 class="colorlib-heading">Who Am I?</h2>
										<p><strong>Hi I'm Rian Hidayatulloh</strong>. perkenalkan nama saya Rian Hidayatulloh lahir Oktober 2002, Saya seorang mahasiswa di Universitas Muhammadiyah Sukabumi
										 dengan Program Studi Teknik Informatika semester 6 dan diprediksi saya akan lulus di Universitas Muhammadiyah Sukabumi pada tahun 2025.</p>
										<p>Saya tertarik dengan Pengembangan Web.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>Graphic Design</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>Web Design</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>Software</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
										<h3>Application</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>Sebenarnya saya masih belajar dalam beberapa bahasa pemrograman yang biasa digunakan, seperti PHP, HTML, CSS, dan JavaScript.</p>
						</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>JS</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="25"
								  	aria-valuemin="0" aria-valuemax="100" style="width:25%">
								    <span>25%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HTML</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="50"
								  	aria-valuemin="0" aria-valuemax="100" style="width:50%">
								    <span>50%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>CSS</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="35"
								  	aria-valuemin="0" aria-valuemax="100" style="width:35%">
								    <span>35%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>PHP</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="35"
								  	aria-valuemin="0" aria-valuemax="100" style="width:35%">
								    <span>35%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>C++</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="35"
								  	aria-valuemin="0" aria-valuemax="100" style="width:35%">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Madrasah Ibtidaiyyah 
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>2010 - 2015. </p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Madrasah Tsanawiyah Al Ittihad
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p>2015 - 2018.</p>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">SMK Terpadu Al Ittihad
									            </a>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									        <div class="panel-body">
									            <p>2018-2021<strong>Rekayasa Perangkat Lunak</strong>, Pengalaman Uji Komptensi
												Membuat project aplikasi eccomerce Memakai framework Laravel 5.</p>	
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFour">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Universitas Muhammadiyah Sukabumi
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									        <div class="panel-body">
									            <p><strong>2021 - sekarang</strong>, Diploma Sarjana S1 Teknik Informatika, ON PROGRES</p>	
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a>

			<section class="colorlib-guestbook" data-section="guestbook">
			<div class="colorlib-narrow-content">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<span class="heading-meta">Guest Book</span>
						<h2 class="colorlib-heading animate-box">Guest Book</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created At</th>
                        </tr>
						<?php $no=1; foreach ($dataBooks as $row) :?>	
                    </thead>
                    <tbody>
                        <tr>
							<td><?= $no++ ?></td>		 
							<td><?= $row->name; ?></td>		
							<td><?= $row->email; ?></td>		
							<td><?= $row->subject; ?></td>		
							<td><?= $row->message; ?></td>		
							<td><?= $row->created_at; ?></td>		
                        </tr>
						<?php endforeach; ?>
                        <!-- You can add more rows here for additional guest book entries -->
                    </tbody>
                </table>
            	</div>
			</div>
		</div>
	</section>

			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">rianhidayatulloh79@gmail.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Kp. Cikaret, RT.015/RW008, Desa 
										Purabaya, Kecamatan Purabaya,
										Kabupaten Sukabumi.
									</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+62 857 5938 0338</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="<?php echo base_url('layout/default'); ?>" method="POST">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name"   placeholder="Name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="email" name="email"  placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
										</div>
										<div class="form-group">
											<textarea type="text" id="message" cols="30" rows="7" class="form-control" id ="message" name="message" placeholder="Message"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message btn-success" value="Send Message">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="<?=base_url()?>/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url()?>/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>/assets/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?=base_url()?>/assets/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?=base_url()?>/assets/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?=base_url()?>/assets/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="<?=base_url()?>/assets/js/main.js"></script>

	</body>
</html>

