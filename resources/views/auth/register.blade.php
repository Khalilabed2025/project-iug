<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" dir="rtl" direction="rtl" style="direction:rtl;">
	<!--begin::Head-->
	<head><base href="../../../">
	<title>التعليم المستمر والدورات العليا</title>
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<!-- <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" /> -->
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset('admin/media/logos/favicon.ico')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
         <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href="{{asset('admin/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendor Stylesheets-->

        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{asset('admin/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		
        <style>
            body, .your-class {
                font-family: "Arial", sans-serif; /* Replace with an Arabic font of your choice */
            }
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{asset('admin/media/illustrations/sketchy-1/14.png')}}">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../demo1/dist/index.html" class="mb-12">
						<img alt="Logo" src="{{asset('admin/media/logos/loo.png')}}" class="h-70px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
                        
						<form method="POST" action="{{ route('register') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" >
                            @csrf
                            <!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">التسجيل</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-5 fw-bolder text-dark">الاسم</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input id="email" class="form-control form-control-lg form-control-solid" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" />
								<!--end::Input-->
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
							</div>
							<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-5 fw-bolder text-dark">البريد الإلكتروني</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input id="email" class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="off" />
								<!--end::Input-->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
							</div>
							<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-5 fw-bolder text-dark">كلمة المرور</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input id="email" class="form-control form-control-lg form-control-solid" type="password"  name="password" autocomplete="off" />
								<!--end::Input-->
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
							</div>
							<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-5 fw-bolder text-dark">تأكيد كلمة المرور</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input id="email" class="form-control form-control-lg form-control-solid" type="password"  name="password_confirmation" autocomplete="off" />
								<!--end::Input-->
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
							</div>
							<!--end::Input group-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">تسجيل</span>
								</button>					
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset('admin/js/custom/authentication/sign-in/general.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>





