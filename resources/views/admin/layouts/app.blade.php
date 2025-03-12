<!DOCTYPE html>
<html lang="en" dir="rtl" style="direction:rtl;">
    <!--begin::Head-->
    @include('admin.partials.head')
    <!--end::Head-->

	<!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <style>
            body, .your-class {
                font-family: "Cairo", sans-serif; /* Replace with an Arabic font of your choice */
            }
        </style>
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Aside-->
                @include('admin.partials.aside')
                <!--end::Aside-->
                
            	<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
                    @include('admin.partials.header')
					<!--end::Header-->
					<!--begin::Content-->
					@yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
                    @include('admin.partials.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        @yield('modals')
        @include('admin.partials.scripts')
    </body>
</html>
