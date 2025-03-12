<!DOCTYPE html>

<html lang="en" dir="rtl" direction="rtl" style="direction:rtl;">
	<!--begin::Head-->
	<head><base href="">
		<title>التعليم المستمر والدورات العليا</title>
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<!-- <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" /> -->
		<!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
		<!-- <link rel="shortcut icon" href="{{asset('admin/media/logos/favicon.ico')}}" /> -->
		<!--begin::Fonts-->
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
		<!--end::Fonts-->
	     <!--begin::Global Stylesheets Bundle(used by all pages)-->
		 <!--begin::Page Vendor Stylesheets(used by this page)-->
		 <!-- <link href="{{asset('admin/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" /> -->
		 <!--end::Page Vendor Stylesheets-->
		 <!--begin::Global Stylesheets Bundle(used by all pages)-->
		 <!-- <link href="{{asset('admin/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" /> -->
		 <!-- <link href="{{asset('admin/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" /> -->
		<!--end::Global Stylesheets Bundle-->
	 <!-- Vendor CSS Files -->

		<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />

		<link href="{{asset('admin/css/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('admin/css/aos/aos.css')}}" rel="stylesheet"  />
		<link href="{{asset('admin/css/main.css')}}" rel="stylesheet" />
		<style>
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body  class="index-page">

		<header id="header" class="header d-flex align-items-center fixed-top">
			<div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1 class="sitename">
				<img alt="Logo" src="{{asset('admin/media/logos/loo.png')}}" class="logo-default h-50px " />
				</h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
				<li>قسم ادارة المهام في الاكاديمة التعليم المستمر والدورات العليا </li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

			@if(Auth()->user())
				<div class="flex text-end ms-1">
					<a href="{{route('dashboard')}}" class="btn btn-success">لوحة التحكم</a>
				</div>	
				<div class="flex text-end ms-1">
					<form method="POST" action="{{route('logout')}}">
						@csrf
						<button type="submit"  class="btn btn-danger">تسجيل الخروج</button>
					</form>
				</div>
			@else
				<div class="flex-equal text-end ms-1">
					<a href="{{route('login')}}" class="btn-getstarted fw-bold">تسجيل الدخول</a>
				</div>	
			@endif
			</div>
			
		</header>


	<main class="main">
			<!-- Hero Section -->
		 <section id="hero" class="hero section">
			
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" >
              <div class="company-badge mb-4">
                <i class="bi bi-gear-fill mx-2"></i>
                نظام  ادارة , متكامل , واضح , سهل 
              </div>
              <h1 class="mb-4">
               اهلا وسهلا بكم <br>
                في قسم التعليم المستمر  <br>
                <span class="accent-text">والدورات العليا </span>
              </h1>
              <p class="mb-4 mb-md-5">
         	هلا وسهلا بكم في قسم الادارة لمتابعة الامور الاكاديمة في الاكاديمة التعليمة 
              </p>
              <div class="hero-buttons">
                <a href="{{route('login')}}" class="btn btn-primary me-0 me-sm-2 mx-1">تسجيل الدخول </a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                 شاهد الفيديو
                </a>
			
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image" >
              <img src="{{asset('admin/media/illustrations/illustration-1.webp')}}" alt="Hero Image" class="img-fluid">
			  
			<div class="customers-badge">
				<div class="customer-avatars">
				<img src="{{asset('admin/media/illustrations/avatar-1.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-2.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-3.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-4.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-5.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-3.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-2.webp')}}" alt="Customer 1" class="avatar">
				<img src="{{asset('admin/media/illustrations/avatar-1.webp')}}" alt="Customer 1" class="avatar">
				<span class="avatar more">242+</span>
				</div>
				<p class="mb-0 mt-2">+250 طالب في اكاديمة الدورات العليا والتعليم المستمر </p>
			</div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->
	</main>

		
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<!-- <script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script> -->
		<!-- <script src="{{asset('admin/js/scripts.bundle.js')}}"></script> -->
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<!-- <script src="{{asset('admin/plugins/custom/fslightbox/fslightbox.bundle.js')}}"></script> -->
		<!-- <script src="{{asset('admin/plugins/custom/typedjs/typedjs.bundle.js')}}"></script> -->
		<!--end::Page Vendors Javascript-->
		<!--end::Javascript-->




		<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('admin/css/aos/aos.js')}}"></script>
		<script src="{{asset('admin/js/main.js')}}"></script>

		<!-- <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/aos.js"></script> -->
  <!-- <script src="assets/js/glightbox.min.js"></script> -->
  <!-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script> -->
  <!-- Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->


	</body>

	<!--end::Body-->
</html>


<!-- 
<div class="col-lg-6">
						<div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
						<img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

						<div class="customers-badge">
							<div class="customer-avatars">
							<img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
							<img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
							<img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
							<img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
							<img src="assets/img/avatar-4.webp" alt="Customer 5" class="avatar">
							<img src="assets/img/avatar-4.webp" alt="Customer 6" class="avatar">
							<img src="assets/img/avatar-4.webp" alt="Customer 7 " class="avatar">
							<img src="assets/img/avatar-5.webp" alt="Customer 8" class="avatar">
							<span class="avatar more">242+</span>
							</div>
							<p class="mb-0 mt-2">+250 طالب في اكاديمة الدورات العليا والتعليم المستمر </p>
						</div>
						</div>
         		 </div> -->