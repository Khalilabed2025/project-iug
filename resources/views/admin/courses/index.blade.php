@extends('admin.layouts.app')
@section('head')
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
	<!--end::Page Vendor Stylesheets-->
@endsection
@section('content')	
<!--begin::Content-->
<div class="mt-4 mb-8 d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div class="toolbar">
		<!--begin::Container-->
		<div class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">قائمة الدروات التدريبية</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="{{route('dashboard')}}" class="text-muted text-hover-primary">الرئيسية</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">الدورات التدريبية</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
		
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container-xxl">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card header-->
				<div class="card-header border-0 pt-6">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" id="coursesFilterInput" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن دروة تدريبية" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end">
							<!--end::Filter-->
							<!--begin::Export-->
							<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
									<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
									<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
								</svg>
							</span>
							<!--end::Svg Icon-->تصدير</button>
							<!--end::Export-->
							<!--begin::Add user-->
							<a id="AddBtncourses" type="button" class="btn btn-primary" href="{{route('courses.create')}}">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
									<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->اضافة دروة تدريبية</a>
							<button type="button" class="multipleDeleteBtn btn btn-light-primary me-3" data-url="dashboard/courses" data-type="courses">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
									<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->حذف المحدد</button>
							<!--end::Add user-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Modal - Adjust Balance-->
						<div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
							<!--begin::Modal dialog-->
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<!--begin::Modal content-->
								<div class="modal-content">
									<!--begin::Modal header-->
									<div class="modal-header">
										<!--begin::Modal title-->
										<h2 class="fw-bolder">تصدير الدورات التدريبية</h2>
										<!--end::Modal title-->
										<!--begin::Close-->
										<div class="btn btn-icon btn-sm btn-active-icon-primary"  data-bs-dismiss="modal">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Close-->
									</div>
									<!--end::Modal header-->
									<!--begin::Modal body-->
									<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
										<!--begin::Form-->
										<form class="form" method="POST" action="{{route('courses-export')}}">
											@csrf
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="fs-6 fw-bold form-label mb-2">الحالة:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select name="status" data-control="select" data-placeholder="اختر الحالة" data-hide-search="true" class="form-select form-select-solid fw-bolder">
													<option></option>
													@foreach ($statuses as $status )
													<option value="{{$status}}">{{$status}}</option>
													@endforeach
												</select>
												<!--end::Input-->
											</div>
											<!--end::Input group-->		
											<!--begin::Input group-->
											<div class="row mb-10">
												<div class="col-lg-12">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2"> العام:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input id="datepicker" class="form-control form-control-solid" placeholder="اختر العام" name="year" />
													<!--end::Input-->
												</div>	
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="fs-6 fw-bold form-label mb-2">الجهة المستفيدة:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select name="beneficiary" data-control="select3" data-placeholder="اختر الجهة المستفيدة" data-hide-search="true" class="form-select form-select-solid fw-bolder">
													<option></option>
													@foreach ($beneficiaries as $beneficiary )
													<option value="{{$beneficiary}}">{{$beneficiary}}</option>
													@endforeach
												</select>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="text-center">
												<button type="reset"  data-bs-dismiss="modal" class="btn btn-light me-3">إلغاء</button>
												<button type="submit" class="btn btn-primary">تصدير</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Modal body-->
								</div>
								<!--end::Modal content-->
							</div>
							<!--end::Modal dialog-->
						</div>
						<!--end::Modal - New Card-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="table-responsive card-body pt-0">
					<div class="d-flex align-items-center ms-2">
						<label for="itemsPerPage">أظهر:</label>
						<select id="itemsPerPage" data-control="select" class="w-70px h-40px form-select form-select-solid fw-bolder">
							<option selected value="10">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<!-- Add more options as needed -->
						</select>
						<label for="itemsPerPage">مدخلات</label>
					</div>
					<!--begin::Table-->
					<table id="coursesTable" class="table align-middle table-row-dashed fs-6 gy-3">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input selectAll" data-type="courses" type="checkbox" value="1" />
									</div>
								</th>
								<th class="min-w-150px">الدورة التدريبية</th>
								<th class="min-w-90px">المجال</th>
								<th class="min-w-90px">المدرب</th>
								<th class="min-w-90px">السعر</th>
								<th class="min-w-90px">عدد الساعات</th>
								<th class="min-w-90px">تاريخ الاضافة</th>
								<th class="min-w-80px">إجراءات</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="text-gray-600 fw-bold">
							@if(count($courses))
								@foreach($courses as $course)	
									<?php
									if($course->getFirstMedia('courses')){
									$trimmedUrl = str_replace('www.', '', $course->getFirstMedia('courses')->getUrl());
									}else{
									$trimmedUrl	='#';
									}
									$date = new DateTime($course->created_at);
									$formattedDate = $date->format('Y-m-d');
									?>	
									<!--begin::Table row-->
									<tr>
										<!--begin::Checkbox-->
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="rowCheckbox form-check-input" data-type="courses" type="checkbox" value="1" />
											</div>
										</td>
										<!--end::Checkbox-->
										<!--begin::User=-->
										<td class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="{{route('courses.show',$course->id)}}">
													<div class="symbol-label">
														<img src="{{$trimmedUrl}}" alt="دورة" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<!--begin::User details-->
											<div class="d-flex flex-column">
												<a href="{{route('courses.show',$course->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$course->title}}</a>
												<span class="badge badge-light fw-bolder">{{$course->status}}</span>
											</div>
											<!--begin::User details-->
										</td>
										<!--end::User=-->
										<!--begin::Phone=-->
										<td>{{$course->field}}</td>
										<!--end::Phone=-->
										<!--begin::Last login=-->
										<td>
											<div>@foreach($course->trainers as $trainer){{$trainer->name}} <br> @endforeach</div>
										</td>
										<!--end::Last login=-->
										<!--begin::Two step=-->
										<td>{{$course->price}}</td>
										<td>{{$course->hours}}</td>
										<!--end::Two step=-->
										<!--begin::Joined-->
										<td>{{$formattedDate}}</td>
										<!--begin::Joined-->
										<!--begin::Action=-->
										<td class="text-start">
											<a href="javascript:void(0)" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">إجراءات
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="{{route('courses.edit',$course->id)}}" class="menu-link px-3">تعديل</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a type="button" class="DeleteBtn menu-link px-3" data-id="{{$course->id}}" data-url="dashboard/courses/{{$course->id}}">حذف</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
										</td>
										<!--end::Action=-->
									</tr>
									<!--end::Table row-->
								@endforeach
							@endif
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
					<div class="d-flex align-items-center justify-content-end">
						<nav aria-label="Pagination">
							<ul class="pagination pagination-sm">
								<li class="page-item">
									<a id="prevPage" href="javascript:void(0)" class="page-link">السابق</a>
								</li>
								<div id="pageNumberButtons" class="d-flex"></div> <!-- Container for page number buttons -->
								<li class="page-item">
									<a id="nextPage" href="javascript:void(0)" class="page-link">التالي</a>
								</li>
							</ul>
						</nav>
					</div>

				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->

  
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var currentPage = 1;
        var totalItems = {{ count($courses) }};
        var itemsPerPage = parseInt($('#itemsPerPage').val());

        function updatePagination() {
            var startIndex = (currentPage - 1) * itemsPerPage;
            var endIndex = Math.min(startIndex + itemsPerPage, totalItems);

            var tableRows = $('#coursesTable tbody tr');
            tableRows.hide();
            tableRows.slice(startIndex, endIndex).show();

            $('#currentPage').text('Page ' + currentPage);

            // Remove 'active' class from all page number buttons
            $('#pageNumberButtons .pageNumberButton').removeClass('btnActive');
            // Add 'active' class to the current page number button
            $('#pageNumberButtons .pageNumberButton:eq(' + (currentPage - 1) + ')').addClass('btnActive');
        }

        // Initial display
        updatePagination();

        // Function to handle page number button click
        function handlePageButtonClick(clickedPage) {
            currentPage = clickedPage;
            updatePagination();
        }

        // Handle "Next" button click
        $('#nextPage').on('click', function() {
            if (currentPage < Math.ceil(totalItems / itemsPerPage)) {
                currentPage++;
                updatePagination();
            }
        });

        // Handle "Previous" button click
        $('#prevPage').on('click', function() {
            if (currentPage > 1) {
                currentPage--;
				updatePagination();
       
            }
        });

        // Handle items per page change
        $('#itemsPerPage').on('change', function() {
            currentPage = 1;
            itemsPerPage = parseInt($(this).val());
            updatePagination();
        });

        // Create page number buttons
        var pageNumberButtonsContainer = $('#pageNumberButtons');
        for (var i = 1; i <= Math.ceil(totalItems / itemsPerPage); i++) {
            var pageNumberButton = $('<button class="pageNumberButton page-link rounded w-30px">' + i + '</button>');
            pageNumberButtonsContainer.append(pageNumberButton);

            pageNumberButton.on('click', function() {
                handlePageButtonClick(parseInt($(this).text()));
            });
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<!--end::Page Custom Javascript-->
<script>

	$(document).ready(function () {
        // Search functionality
        $("#coursesFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#coursesTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
	});

	$("#datepicker").datepicker({
		format: "yyyy",
		viewMode: "years", 
		minViewMode: "years",
		autoclose:true //to close picker once year is selected
	});
</script>


@endsection