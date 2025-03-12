@extends('admin.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.ccc{
			background-color: #eee8aa94;
		}
	</style>
</head>
<body>
	
</body>
</html>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Row-->
			<div class="row gy-5 g-xl-8 "  >
					<div class="col-xl-4 " >
						<!--begin::Statistics Widget 5-->
						<a href="{{route('courses.index')}}" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="row card-body ccc" >
								<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
									<!--begin:: Png Icon-->
									<span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
										<img src="{{asset('admin/media/icons/duotune/arrows/Group.png')}}" viewBox="0 0 24 24" fill="none">
									</span>
									<!--end::Png Icon-->
									<div class="text-gray-900 fw-bolder fs-4">الدورات التدريبية</div>
								</div>
								<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
									<div class="text-gray-900 fw-bolder display-2">{{count($courses) ?? '-'}}</div>
								</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 5-->
						<a href="{{route('trainers.index')}}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="row card-body">
								<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
									<!--begin:: Png Icon-->
									<span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
										<img src="{{asset('admin/media/icons/duotune/arrows/Group3.png')}}" height="62px" width="62px" viewBox="0 0 24 24" fill="none">
									</span>
									<!--end::Png Icon-->
									<div class="text-white fw-bolder fs-4">المدربون</div>
								</div>
								<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
									<div class="text-white fw-bolder display-2">{{count($trainers) ?? '-'}}</div>
								</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 5-->
						<a href="{{route('trainees.index')}}" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="row card-body">
								<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
									<!--begin:: Png Icon-->
									<span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
										<img src="{{asset('admin/media/icons/duotune/arrows/Group2.png')}}" height="62px" width="62px" viewBox="0 0 24 24" fill="none">
									</span>
									<!--end::Png Icon-->
									<div class="text-white fw-bolder fs-4">المتدربون</div>
								</div>
								<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
									<div class="text-white fw-bolder display-2">{{count($trainees) ?? '-'}}</div>
								</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
			</div>
			<!--end::Row-->

			<!--begin::Row-->
			<div class="row gy-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::List Widget 2-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0">
							<a class="card-title fw-bolder text-dark" href="{{route('trainers.index')}}">
								<h3 >المدربون</h3>
							</a>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 2-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">وصول سريع</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mb-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{route('trainers.create')}}" class="menu-link px-3">مدرب جديد</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 2-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">	
							@foreach ($trainers->take(5) as $trainer)
								<?php
								if($trainer->getFirstMedia('trainers')){
								$trimmedUrl = str_replace('www.', '', $trainer->getFirstMedia('trainers')->getUrl());
								}else{
								$trimmedUrl	='#';
								}
								?>
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-7">
								<!--begin::Avatar-->
								<a class="symbol symbol-50px me-5" href="{{route('trainers.show',$trainer->id)}}">
									<img  src="{{$trimmedUrl}}" class="" alt="" />
								</a>
								<!--end::Avatar-->
								<!--begin::Text-->
								<div class="flex-grow-1">
									<a href="{{route('trainers.show',$trainer->id)}}" class="text-dark fw-bolder text-hover-primary fs-6">{{$trainer->name}}</a>
									<span class="text-muted d-block fw-bold">{{$trainer->specilization}}</span>
								</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							@endforeach

						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 2-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::List Widget 6-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0">
							<a class="card-title fw-bolder text-dark"  href="{{route('courses.index')}}">
								<h3 >الدورات التدريبية</h3>
							</a>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">وصول سريع</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mb-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{route('courses.create')}}" class="menu-link px-3">دورة تدريبية جديدة</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-0">
							@if ($courses)
							<?php
							$color = ['warning','success','danger','info']
							?>
								@foreach ($courses->take(4) as $index =>$course)
								<?php
								    $course_trainees = $course->trainees;
									$percentage = (count($course_trainees)/$course->capacity)*100
								?>
									<!--begin::Item-->
									<div class="d-flex align-items-center bg-light-{{$color[$index]}} rounded p-5 mb-7">
										<!--begin::Icon-->
										<span class="svg-icon svg-icon-warning me-5">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<!--end::Icon-->
										<!--begin::Title-->
										<div class="flex-grow-1 me-2">
											<a href="{{route('courses.show',$course->id)}}" class="fw-bolder text-gray-800 text-hover-primary fs-6">{{$course->title}}</a>
											<span class="text-muted fw-bold d-block"> @foreach($course->trainers as $trainer){{$trainer->name}}, @endforeach </span>
										</div>
										<!--end::Title-->
										<!--begin::Lable-->
										<span class="fw-bolder text-warning py-1">{{$percentage}}%</span>
										<!--end::Lable-->
									</div>
									<!--end::Item-->
								@endforeach	
							@endif
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 6-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::List Widget 4-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder text-dark">المتدربين</span>
								<span class="text-muted mt-1 fw-bold fs-7">اخر المتدربين الملتحقين</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">وصول سريع</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mb-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{route('trainees.create')}}" class="menu-link px-3">متدرب جديد</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-5">
							@if($trainees)
								@foreach($trainees->take(5) as $trainee)
									<?php
									if($trainee->getFirstMedia('trainees')){
									$trimmedUrl = str_replace('www.', '', $trainee->getFirstMedia('trainees')->getUrl());
									}else{
									$trimmedUrl	='#';
									}
									?>
									<!--begin::Item-->
									<div class="d-flex align-items-sm-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-5">
											<a class="symbol symbol-50px me-5" href="{{route('trainees.show', $trainee->id) }}">
												<img  src="{{$trimmedUrl}}" class="" alt="" />
											</a>
										</div>
										<!--end::Symbol-->
										<!--begin::Section-->
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 me-2">
												<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$trainee->name_en}}</a>
												<span class="text-muted fw-bold d-block fs-7">{{$trainee->status}}</span>
											</div>
											<span  class="badge badge-light fw-bolder my-2"></span>
										</div>
										<!--end::Section-->
									</div>
									<!--end::Item-->
								@endforeach
							@endif
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 4-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
	
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
@endsection