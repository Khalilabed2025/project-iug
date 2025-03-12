@extends('admin.layouts.app')

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
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">قائمة المتدربين</h1>
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
					<li class="breadcrumb-item text-dark">المتدربون</li>
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
							<input type="text" id="traineesFilterInput" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن متدرب" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							
							<!--begin::Add user-->
							<a type="button" id="AddBtntrainees" class="btn btn-primary" href="{{route('trainees.create')}}">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
									<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->إضافة متدرب</a>
							<!--end::Add user-->
							<!--begin::Add user-->
							<button data-type="trainees" data-url="dashboard/trainees" type="button" class="multipleDeleteBtn btn btn-light-primary me-3">
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
						<!--begin::Group actions-->
						<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
							<div class="fw-bolder me-5">
							<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
							<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
						</div>
						<!--end::Group actions-->
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
										<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
										<form id="kt_modal_export_users_form" class="form" action="#">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="fs-6 fw-bold form-label mb-2">الحالة:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select name="status" data-control="select2" data-placeholder="اختر الحالة" data-hide-search="true" class="form-select form-select-solid fw-bolder">
													<option></option>
													<option value="preparing">في التحضير</option>
													<option value="going">جاري</option>
													<option value="done">تم</option>
												</select>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-20">
												<div class="col-lg-6">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">تاريخ الابتداء:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="date" class="form-control form-control-solid" placeholder="اختر تاريخ الابتداء" name="from" />
													<!--end::Input-->
												</div>	
												<div class="col-lg-6">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">تاريخ النهاية:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="date" class="form-control form-control-solid" placeholder="اختر تاريخ الانتهاء" name="to" />
													<!--end::Input-->
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="text-center">
												<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
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
					<table class="table align-middle table-row-dashed fs-6 gy-2" id="traineesTable">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input selectAll" data-type="trainees" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
									</div>
								</th>
								<th class="min-w-150px">المتدرب</th>
								<th class="min-w-60px">رقم الهوية</th>
								<th class="min-w-125px">العنوان</th>
								<th class="min-w-70px">رقم الهاتف</th>
								<th class="min-w-90px">تاريخ الانضمام</th>
								<th class="min-w-100px">إجراءات</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="text-gray-600 fw-bold">
							@if(count($trainees))
								<form id="my_form" method="POST" action="{{route('deleteSelected')}}">
								@csrf
								@foreach($trainees as $trainee)	
									<?php
									if($trainee->getFirstMedia('trainees')){
									$trimmedUrl = str_replace('www.', '', $trainee->getFirstMedia('trainees')->getUrl());
									}else{
									$trimmedUrl	='#';
									}
									$date = new DateTime($trainee->created_at);
									$formattedDate = $date->format('Y-m-d');
									?>	
									<!--begin::Table row-->
									<tr>
										<!--begin::Checkbox-->
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="rowCheckbox form-check-input" data-type="trainees" type="checkbox" value="1" />
											</div>
										</td>
										<!--end::Checkbox-->
										<!--begin::User=-->
										<td class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="{{route('trainees.show',$trainee->id)}}">
													<div class="symbol-label">
														<img src="{{$trimmedUrl}}" alt="متدرب" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<!--begin::User details-->
											<div class="d-flex flex-column">
												<a href="{{route('trainees.show',$trainee->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$trainee->name_ar}}</a>
												<span>{{$trainee->email}}</span>
											</div>
											<!--begin::User details-->
										</td>
										<!--end::User=-->
										<!--begin::Phone=-->
										<td>{{$trainee->identity}}</td>
										<!--end::Phone=-->
										<!--begin::Last login=-->
										<td>{{$trainee->state}}/{{$trainee->city}}/{{$trainee->street}}</td>
										<!--end::Last login=-->
										<!--begin::Two step=-->
										<td>{{$trainee->phone}}</td>
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
													<a href="{{route('trainees.edit',$trainee->id)}}" class="menu-link px-3">تعديل</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="{{route('trainees.application',$trainee->id)}}" type="button" class="menu-link px-3">استمارة متدرب</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a type="button" class="menu-link px-3 DeleteBtn" data-id="{{$trainee->id}}" data-url="dashboard/terainee/{{$trainee->id}}">حذف</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
										</td>
										<!--end::Action=-->
									</tr>
									<!--end::Table row-->
								@endforeach
							</form>
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
        var totalItems = {{ count($trainees) }};
        var itemsPerPage = parseInt($('#itemsPerPage').val());

        function updatePagination() {
            var startIndex = (currentPage - 1) * itemsPerPage;
            var endIndex = Math.min(startIndex + itemsPerPage, totalItems);

            var tableRows = $('#traineesTable tbody tr');
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

<script>
	$(document).ready(function () {
        // Search functionality
        $("#traineesFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#traineesTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
	});
</script>

@endsection



