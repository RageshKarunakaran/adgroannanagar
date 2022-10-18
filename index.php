<?php 
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
	
	<title>Advanced Grohair</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<?php include('head.php') ?>
	
</head>
<body>
	<?php include ('header.php') ?>
	

<section class="hero_section">
		<!-- <video class="full-image" data-mask="50" playsinline="" autoplay="" muted="" loop="">
                            <source src="assets/img/hero_video.mp4" type="video/mp4">
                        </video> -->
                        <div class="sec-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-7 my-auto">
				<div class="banner_content">
				<h1>Transform your life with Advanced Grohair Clinic</h1>
				
				<a href="#contact-form" class="vs-btn style2">Contact Us<i class="far fa-phone-alt"></i></a>
			</div>
			<img src="assets/img/Heads.png" width="600px">
			</div>
			<div class="col-lg-5 text-center">
					<div class="form-box" id="contact-form">
									<h3 class="text-white">Contact Us</h3>
									<div class="row">
									<div class="col-md-12">
										<?php if(!empty($_GET['message'])) {
										    $message = $_GET['message'];?>

<span class="text-success"><?php echo $message; ?></span><?php
										     
										}
										
										?>

									</div>
								</div>
								<form method="post" action="mail/mail.php">
									<div class="row">
									
									<div class="col-xl-12 form-group">
										<input type="text" name="name" class="form-control style2" placeholder="Your Name"> <i class="fal small fa-user"></i></div>
									<div class="col-xl-12 form-group">
										<input type="email" name="email" class="form-control style2" placeholder="Email Address"> <i class="fal small fa-envelope"></i></div>
									<div class="col-xl-12 form-group">
										<input type="number" name="mobile" class="form-control style2" placeholder="Your Phone"> <i class="fal small fa-phone"></i></div>
									<!-- <div class="col-xl-12 form-group">
										<input type="text" name="calendar" class="dateTime-pick form-control style2" placeholder="Select Date &amp; Time"> <i class="fal small fa-calendar-alt"></i></div> -->
									<div class="col-xl-12 text-center">
										<button type="submit"  class="vs-btn style2">Make an Appointment<i class="far fa-calendar-alt"></i></button>
									</div>
								</div>
								</form>
							</div>
			</div>
		</div>
		
	</div>
</section>

<section class="vs-about-wrapper space position-relative" id="about" data-bg-src="assets/img/bg/bg-shape-1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-30 mb-lg-0">
					<div class="about-img1 wow fadeInUp" data-wow-delay="0.3s"><img src="assets/img/website.png" alt="About Image" class="w-100"> <a href="assets/img/hari.mp4" class="play-btn popup-video"><i class="fas fa-play"></i></a></div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="about-content ps-xl-5 ms-xl-2">
						<h2 class="h1 mt-n2 mb-3 pb-1">A Complete <span class="text-theme">Hair Regrowth</span> Solution Company</h2>
						<p>Advanced Grohair Clinic in Chennai is one of the prominent hair solution provider in India offering world class treatments to counter baldness and uplift the youthful spirits. </p>
				<p>All treatments available are 100% safe and approved for treatment. Contact us to know more.</p>
						<p>Advanced Grohair is committed to educating and improving the lives of all those affected by hair loss. It is our goal to create public awareness of this devastating disease of the spirit, and to legitimize hair loss of all forms in the eyes of our medical community, the media and society as a whole.</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="position-relative bg-box1" id="services">
		<div class="bg-box-shape1 position-absolute" data-overlay="title" data-opacity="7" data-bg-src="assets/img/bg/one.jpg"></div>
		<div class="bg-box-shape2 position-absolute" data-bg-src="assets/img/bg/bg-shape-2.jpg"></div>
		<section class="vs-service-wrapper space">
			<div class="container">
				<div class="row text-center justify-content-center">
					<div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="section-title"><span class="h3 sec-subtitle text-theme">Hair & General Care!</span>
							<h2 class="h1 text-white">Hair Regrowth Services</h2>
							<p class="text-white-light">Advanced Grohair Clinic has revolutionalised hair regrowth treatments with efficacy and innovative methodologies</p>
						</div>
					</div>
				</div>
				<div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-arrows="true" data-slide-show="3">
					<div class="col-xl-4">
						<div class="service-card mb-30">
							<div class="sr-body">
								<h3 class="h4 sr-title mb-2 mb-md-4"><a class="text-reset" href="service-details.html">Advanced Grohair Percutaneous Method</a></h3>
								<p class="sr-text fs-xs">The Advanced Grohair percutaneous method is a modern technique through which channels that will include hair follicles are opened in the receiving area using a micro needle made of titanium in order to allow a good implantation of the extracted bulbs, also controlling the depth and direction of the follicles in order to give the hair grafts the best natural look possible.  </p>
							</div>
							<div class="sr-icons"><a href="#" class="icon-btn style2"><i class="far fa-long-arrow-right"></i></a> <span class="sr-icon"><i class="flaticon-medical-symbol fa-4x"></i></span></div>
							<div class="sr-img">
								<div class="position-absolute start-0 end-0 top-0"><img src="assets/img/bg/sr-shape.png" class="w-100" alt="Shape"></div><img class="w-100" src="assets/img/services/Hair transplant.png" alt="Serivce Image"></div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="service-card mb-30">
							<div class="sr-body">
								<h3 class="h4 sr-title mb-2 mb-md-4"><a class="text-reset" href="#">Advanced Grohair Cosmetic Systems</a></h3>
								<p class="sr-text fs-xs">At Advanced Grohair we believe every man should feel great about his hair. That’s why we deliver luxurious, bespoke hair care treatments for the discerning modern gentleman – including everything from a simple cut and style through to our effective non-surgical hair replacement and loss treatments.</p>
							</div>
							<div class="sr-icons"><a href="#" class="icon-btn style2"><i class="far fa-long-arrow-right"></i></a> <span class="sr-icon"><i class="flaticon-healthcare fa-4x"></i></span></div>
							<div class="sr-img">
								<div class="position-absolute start-0 end-0 top-0"><img src="assets/img/bg/sr-shape.png" class="w-100" alt="Shape"></div><img class="w-100" src="assets/img/cosmetic banner.png" alt="Serivce Image"></div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="service-card mb-30">
							<div class="sr-body">
								<h3 class="h4 sr-title mb-2 mb-md-4"><a class="text-reset" href="#">Advanced Grohair Laser Therapy for Hair Restoration</a></h3>
								<p class="sr-text fs-xs">Laser hair therapy uses medical-grade lasers to deliver safe, low-level laser light to your scalp. As this light is absorbed, it helps increase microcirculation delivering a richer blood supply and nutrients to the hair follicle. Low-level laser light stimulates cellular activity in your follicles to help minimize hair loss while supporting hair regrowth.</p>
							</div>
							<div class="sr-icons"><a href="#" class="icon-btn style2"><i class="far fa-long-arrow-right"></i></a> <span class="sr-icon"><i class="flaticon-group fa-4x"></i></span></div>
							<div class="sr-img">
								<div class="position-absolute start-0 end-0 top-0"><img src="assets/img/bg/sr-shape.png" class="w-100" alt="Shape"></div><img class="w-100" src="assets/img/services/OLT.png" alt="Serivce Image"></div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="service-card mb-30">
							<div class="sr-body">
								<h3 class="h4 sr-title mb-2 mb-md-4"><a class="text-reset" href="#">Platelet Rich Plasma Pro Plus</a></h3>
								<p class="sr-text fs-xs"> PRP contains special cells called Platelets, that can cause growth of the hair follicles by theoretically stimulating the stem cells located in the Dermal Papilla as well as other structures of the hair follicle. These special Platelet cells promotes healing, accelerates the rate and degree of tissue healing and regeneration, response of the body to injury, and formation of new cellular growth.</p>
							</div>
							<div class="sr-icons"><a href="#" class="icon-btn style2"><i class="far fa-long-arrow-right"></i></a> <span class="sr-icon"><i class="flaticon-discuss fa-4x"></i></span></div>
							<div class="sr-img">
								<div class="position-absolute start-0 end-0 top-0"><img src="assets/img/bg/sr-shape.png" class="w-100" alt="Shape"></div><img class="w-100" src="assets/img/services/scalp Micropigment.png" alt="Serivce Image"></div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center justify-content-lg-between align-items-center pt-30 no-pt-sm">
					<div class="col-auto mb-30 mb-lg-0">
						<!-- <div class="notice-bar fs-xs bg-white text-center">
							<p><i class="fal fa-exclamation-circle text-theme me-2"></i> Delivering tomorrow’s health care for your family. <a href="#"><strong>View Doctor’s Timetable</strong><i class="far fa-long-arrow-right ms-2"></i></a></p>
						</div> -->
					</div>
					<div class="col-auto"><a href="#contact-form" class="vs-btn style2">Make an Appointment<i class="far fa-calendar-alt"></i></a></div>
				</div>
			</div>
		</section>
		<section class="vs-about-wrapper space-md-bottom">
			<div class="container">
				<div class="row flex-row-reverse">
					<div class="col-xl-5 col-xxl-6 mb-30">
						<div class="about-image wow fadeIn" data-wow-delay="0.3s"><img src="assets/img/about-2-1.png" alt="About Image"></div>
					</div>
					<div class="col-xl-7 col-xxl-6 align-self-center"><span class="h3 text-theme sec-subtitle mb-2 mb-md-0">Priority care & Protection</span>
						<h2 class="h1">We love your loved ones</h2>
						<p class="pe-xl-5">Advanced Grohair Clinic is one of the best hair transplant clinic in our country, and provides to our patients the latest methods and techniques that modern science has reached in this field.</p>
						<div class="row pt-3">
							<div class="col-sm-6 col-lg-5 col-xl-6">
								<div class="d-flex mb-25"><span class="text-theme mr-20"><i class="flaticon-security fa-3x lh-1"></i></span>
									<div class="media-body">
										<h3 class="h5 mb-2 pb-1">100% Safe & Trusted</h3>
										<p class="mb-0 fs-xs">The treatments are 100% safe and are FDA aapproved treatments.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-5 col-xl-6">
								<div class="d-flex mb-25"><span class="text-theme mr-20"><i class="flaticon-computer-mouse fa-3x lh-1"></i></span>
									<div class="media-body">
										<h3 class="h5 mb-2 pb-1">Latest Technology</h3>
										<p class="mb-0 fs-xs">Advanced Grohair Patented technology percutaneous FUE Hair Transplant will make the Hair Transplant procedure simpler.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-5 col-xl-6">
								<div class="d-flex mb-25"><span class="text-theme mr-20"><i class="flaticon-healthcare fa-3x lh-1"></i></span>
									<div class="media-body">
										<h3 class="h5 mb-2 pb-1">World Class Ambience</h3>
										<p class="mb-0 fs-xs">Advanced Grohair Clinics are built with premium and technologically advanced instruments to deliver best quality service.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-5 col-xl-6">
								<div class="d-flex mb-25"><span class="text-theme mr-20"><i class="flaticon-laboratory-equipment fa-3x lh-1"></i></span>
									<div class="media-body">
										<h3 class="h5 mb-2 pb-1">Medical Team</h3>
										<p class="mb-0 fs-xs">Our Medical Team with high expertise are registered members of American and European International Society of Hair Restoration Surgery.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- <section class="vs-team-wrapper space-top space-md-bottom" id="doctors" data-bg-src="assets/img/bg/bg-2.jpg">
		<div class="container">
			<div class="row text-center justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title"><span class="h3 text-theme sec-subtitle">Medical & Hair Care!</span>
						<h2 class="h1">Meet Our Doctors</h2>
						<p>The Advanced Grohair Hair medical team is comprised of an elite group of specialists personally chosen and trained by the company's founder.</p>
					</div>
				</div>
			</div>
			<div class="row vs-carousel wow fadeIn" data-wow-delay="0.3s" data-arrows="true" data-slide-show="3" data-lg-slide-show="2">
				<div class="col-xl-4 mb-30">
					<div class="team-card">
						<div class="team-head"><img src="assets/img/t-1-3.png" alt="Team Area" class="w-100">
							<div class="team-card-links"><a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
								<div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fas fa-basketball-ball"></i></a></div>
							</div>
						</div>
						<div class="team-body">
							<h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">David Smith</a></h3>
							<p class="fs-xs degi text-theme mb-2"><strong>Specialist</strong></p>
							<p class="fs-xs">Conceptualize user-centric web-readiness via economically sound e-services. Interactively coordinate next-generation</p>
							<div class="">
								<p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="#">+592 2015 20156</a></p>
								<p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="#">info.example@mail.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="team-card">
						<div class="team-head"><img src="assets/img/t-1-3.png" alt="Team Area" class="w-100">
							<div class="team-card-links"><a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
								<div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fas fa-basketball-ball"></i></a></div>
							</div>
						</div>
						<div class="team-body">
							<h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">Vivi Marian</a></h3>
							<p class="fs-xs degi text-theme mb-2"><strong>Osteopathic</strong></p>
							<p class="fs-xs">Conceptualize user-centric web-readiness via economically sound e-services. Interactively coordinate next-generation</p>
							<div class="">
								<p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="#">+592 2015 20156</a></p>
								<p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="#">info.example@mail.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="team-card">
						<div class="team-head"><img src="assets/img/t-1-3.png" alt="Team Area" class="w-100">
							<div class="team-card-links"><a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
								<div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fas fa-basketball-ball"></i></a></div>
							</div>
						</div>
						<div class="team-body">
							<h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">Farhan Moris</a></h3>
							<p class="fs-xs degi text-theme mb-2"><strong>Pediatrician</strong></p>
							<p class="fs-xs">Conceptualize user-centric web-readiness via economically sound e-services. Interactively coordinate next-generation</p>
							<div class="">
								<p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="#">+592 2015 20156</a></p>
								<p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="#">info.example@mail.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="team-card">
						<div class="team-head"><img src="assets/img/t-1-3.png" alt="Team Area" class="w-100">
							<div class="team-card-links"><a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
								<div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fas fa-basketball-ball"></i></a></div>
							</div>
						</div>
						<div class="team-body">
							<h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">Jerzzy Lamot</a></h3>
							<p class="fs-xs degi text-theme mb-2"><strong>Surgeon</strong></p>
							<p class="fs-xs">Conceptualize user-centric web-readiness via economically sound e-services. Interactively coordinate next-generation</p>
							<div class="">
								<p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="#">+592 2015 20156</a></p>
								<p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="#">info.example@mail.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<div class="bg-box2 position-relative">
		<div class="bg-box-shape3 z-index-n1 position-absolute">
			<div class="parallax" data-parallax-image="assets/img/bg/banner_1.jpg"></div>
		</div>
		<section class="vs-skill-wrapper">
			<div class="container">
				<div class="skill-wrap1 bg-dark">
					<div class="row justify-content-center justify-content-lg-between">
						<div class="col-md-6 col-lg-auto mb-30">
							<div class="d-xl-flex align-items-center text-center text-xl-start skill-box"><span class="ripple-icon align-self-start mb-20 mb-xl-0 mr-20">
								<img src="assets/img/years of experiencesssss.png" width="80px">
						</span>
								<div class="media-body">
									<!-- <h2 class="mt-n2 mb-0">30+</h2> -->
									<p class="text-title fs-xs text-white fw-medium mt-1 mt-xl-0 mb-2 mb-xl-3 pb-1">Years Of Experience</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-auto mb-30">
							<div class="d-xl-flex align-items-center text-center text-xl-start skill-box"><span class="ripple-icon align-self-start mb-20 mb-xl-0 mr-20">
								<img src="assets/img/experienced doctor.png" width="80px">
							</span>
								<div class="media-body">
									<!-- <h2 class="mt-n2 mb-0">100+</h2> -->
									<p class="text-title fs-xs text-white fw-medium mt-1 mt-xl-0 mb-2 mb-xl-3 pb-1">Experienced Doctors</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-auto mb-30">
							<div class="d-xl-flex align-items-center text-center text-xl-start skill-box"><span class="ripple-icon align-self-start mb-20 mb-xl-0 mr-20">
								<img src="assets/img/Happy patient 1.png" width="80px">
							</span>
								<div class="media-body">
									<!-- <h2 class="mt-n2 mb-0">200+</h2> -->
									<p class="text-title fs-xs text-white fw-medium mt-1 mt-xl-0 mb-2 mb-xl-3 pb-1">Happy Patients</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="appointment-wrapper space-top space-bottom" id="contact">
			<div class="container">
				<div class="row gx-0">
					<div class="col-xl-6 align-self-end">
						<div class="about-box1 bg-white">
							<h2 class="h1 mb-3 pb-1">Result-oriented approach and Hassle-free service</span></h2>
							<p>For those struggling with baldness and hair loss, Advanced Grohair is the go-to haircare solution provider with our industry best services and team of medical experts.</p>
							<div class="row pt-2 mt-3">
								<div class="col-md-5 col-lg-4 col-xl-5">
									<ul class="about-list list-unstyled text-title mb-4 pb-1">
										<li>Unique Hair Transplant method</li>
										<li>Cosmetic Hair System</li>
									</ul>
								</div>
								<div class="col-md-5 col-lg-4 col-xl-5">
									<ul class="about-list list-unstyled text-title mb-4 pb-1">
										<li>Hair Restoration method</li>
										<li>PRP PRO +</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
						<form action="#" class="form-wrap1 bg-white">
							<div class="form-title-box bg-title" data-bg-src="assets/img/bg/bg-shape-11.jpg">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h2 class="h4 mb-1 text-white">Book an appointment now</h2>
										<p class="mb-0 text-white-light">Our team of experts will be more than Happy to assist you.
</p>
									</div>
									<div class="col-auto d-none d-sm-block"><a href="#contact-form" class="ripple-icon style2"><i class="fas fa-phone"></i></a></div>
								</div>
							</div>
							<div class="form-box">
								<div class="row">
									<div class="col-md-12">
										<?php if(!empty($_GET['message'])) {
										    $message = $_GET['message'];?>

<span class="text-success"><?php echo $message; ?></span><?php
										    
										}
										
										?>

									</div>
								</div>
								<form method="post" action="mail/mail.php">
								<div class="row">
									
									<div class="col-xl-6 form-group">
										<input type="text" name="name" class="form-control style2" placeholder="Your Name"> <i class="fal small fa-user"></i></div>
									<div class="col-xl-6 form-group">
										<input type="email" name="email" class="form-control style2" placeholder="Email Address"> <i class="fal small fa-envelope"></i></div>
									<div class="col-xl-6 form-group">
										<input type="number" name="mobile" class="form-control style2" placeholder="Your Phone"> <i class="fal small fa-phone"></i></div>
									<div class="col-xl-6 form-group">
										<input type="text" name="calendar" class="dateTime-pick form-control style2" placeholder="Select Date & Time"> <i class="fal small fa-calendar-alt"></i></div>
									<div class="col-xl-12 text-center">
										<button type="submit" class="vs-btn style2">Make Appointment<i class="far fa-calendar-alt"></i></button>
									</div>
								</div>
							</form>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="testimonial-wrapper space-top" id="reviews">
		<div class="parallax" data-parallax-image="assets/img/bg/bg-shape-3.jpg"></div>
		<div class="container position-relative z-index-common">
			<div class="row text-center justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title"><span class="h3 text-theme sec-subtitle">Testimonial</span>
						<h2 class="h1">Our Patient Says</h2>
						<p>These honest feedbacks make us strive to provide our valuable clients with world-class service.  </p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-10 wow fadeIn" data-wow-delay="0.3s">
					<div class="row vs-carousel" data-slide-show="2">
						<div class="col-xl-6">
							<div class="testimonial-box mb-30 bg-white">
								<div class="content">
									<p class="fs-md">This was the best consultation I have ever had. Dr. Soorya is very knowledgeable. He explained my situation clearly and works to get the best treatment available. I highly recommend Advanced Gro Hair Clinic Anna Nagar</p>
								</div>
								<div class="author-img">
									<div class="avater-line"></div>
									<div class="avater"><img src="assets/img/author-1-1.png"></div>
								</div>
								<div class="author-info">
									<div class="info">
										<h3 class="fs-20 name">Malathy Ravi</h3><!-- <span class="fs-xs degi text-theme">CEO, Hosak Int. Ltd.</span> --></div>
									<div class="testi-rating">
										<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="testimonial-box mb-30 bg-white">
								<div class="content">
									<p class="fs-md">Excellent service. I got good results in PRP pro Plus in which they using some advanced technology</p>
								</div>
								<div class="author-img">
									<div class="avater-line"></div>
									<div class="avater"><img src="assets/img/author-1-1.png"></div>
								</div>
								<div class="author-info">
									<div class="info">
										<h3 class="fs-20 name">Priyadharshini S</h3><!-- <span class="fs-xs degi text-theme">HR, Tech Master Ltd.</span> --></div>
									<div class="testi-rating">
										<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">4.00</strong> out of 5</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="testimonial-box mb-30 bg-white">
								<div class="content">
									<p class="fs-md">Wonderful staff with friendly behavior from Ms- Soniya & Shruthi. Dr. Soorya who is such a skilled with expertise of humanity . Worth getting to change life style. Special thanks to Mr Dan & Mr Shan who keep the track of each and every request until closure.</p>
								</div>
								<div class="author-img">
									<div class="avater-line"></div>
									<div class="avater"><img src="assets/img/author-1-1.png"></div>
								</div>
								<div class="author-info">
									<div class="info">
										<h3 class="fs-20 name">Girikarthick</h3><!-- <span class="fs-xs degi text-theme">Founder, Ajaira LTD.</span> --></div>
									<div class="testi-rating">
										<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">4.50</strong> out of 5</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="testi-shape-img text-center mt-n5 wow fadeInUp" data-wow-delay="0.3s"><img src="assets/img/Heads.png" alt="Image" width="800px"></div>
	</section>



	<!-- <section class="vs-blog-wrapper space">
		<div class="container">
			<div class="row text-center justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title"><span class="h3 text-theme sec-subtitle">Updates News</span>
						<h2 class="h1">Latest Posts</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
					</div>
				</div>
			</div>
			<div class="row vs-carousel wow fadeIn" data-wow-delay="0.3s" data-slide-show="3">
				<div class="col-xl-4">
					<div class="vs-blog blog-card">
						<div class="blog-img"><img src="assets/img/b-1-4.jpg" alt="Blog Image" class="w-100">
							<div class="blog-date">
								<div class="day">22</div>Jan 2021</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta"><a href="#"><i class="far fa-folder"></i>Hair Health</a> <a href="#"><i class="fal fa-user"></i>David Smith</a></div>
							<h3 class="blog-title h5 font-body lh-base"><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h3><a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a></div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="vs-blog blog-card">
						<div class="blog-img"><img src="assets/img/b-1-4.jpg" alt="Blog Image" class="w-100">
							<div class="blog-date">
								<div class="day">23</div>Mar 2021</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta"><a href="#"><i class="far fa-folder"></i>Hair Health</a> <a href="#"><i class="fal fa-user"></i>Vivi Marian</a></div>
							<h3 class="blog-title h5 font-body lh-base"><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h3><a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a></div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="vs-blog blog-card">
						<div class="blog-img"><img src="assets/img/b-1-4.jpg" alt="Blog Image" class="w-100">
							<div class="blog-date">
								<div class="day">28</div>Dec 2021</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta"><a href="#"><i class="far fa-folder"></i>Hair Health </a><a href="#"><i class="fal fa-user"></i>Moris John</a></div>
							<h3 class="blog-title h5 font-body lh-base"><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h3><a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a></div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="vs-blog blog-card">
						<div class="blog-img"><img src="assets/img/b-1-4.jpg" alt="Blog Image" class="w-100">
							<div class="blog-date">
								<div class="day">22</div>Jan 2021</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta"><a href="#"><i class="far fa-folder"></i>Hair Health</a> <a href="#"><i class="fal fa-user"></i>David Smith</a></div>
							<h3 class="blog-title h5 font-body lh-base"><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h3><a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vs-brand-wrapper position-relative">
		<div class="icon-shape1 d-none d-xxl-block"><img src="assets/img/icon/icon-1.jpg" alt="Icon"></div>
		<div class="icon-shape2 d-none d-xxl-block"><img src="assets/img/icon/icon-2.png" alt="Icon"></div>
		<div class="container">
			<div class="brand-wrap1" data-bg-src="assets/img/bg/bg-5.jpg">
				<div class="row">
					<div class="col-md-10 col-lg-8 col-xl-6">
						<div class="section-title"><span class="h3 text-theme sec-subtitle">Customer Satisfaction</span>
							<h2 class="h1">Own your look now</h2>
							<p>The depressive consequences of hair fall and baldness can never be ignored. As a majority of men as well as women are troubled by the same, countering the loss of confidence and self-esteem is essential and the same can be assured by Advanced Grohair Hair Clinic.</p>
						</div>
					</div>
				</div>
				<div class="row vs-carousel" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2">
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
					<div class="col-auto">
						<div class="brand"><img src="assets/img/brand-1-5.png" alt="Brand Image"></div>
					</div>
				</div>
			</div>
		</div>
	</section>s -->
	<div class="vs-newsletter-wrapper space-bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8" data-sec-pos="top-half" data-pos-for=".brand-wrap1">
					<form action="#" class="form-style1 form-wrap2">
						<div class="form-group mb-0 d-md-flex text-center text-md-start"><i class="fas fa-envelope text-theme"></i>
							<input type="text" class="form-control" placeholder="Enter your email address">
							<button type="submit" class="vs-btn style2 mt-30 mt-md-0"><i class="far fa-long-arrow-right"></i>Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php') ?>
</body>

</html>