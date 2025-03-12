@extends('admin.layouts.app')
@section('head')
<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th, td {
		border: 1px solid #ccc;
		text-align: center;
		padding: 8px;
	}

	th {
		background-color: #f2f2f2;
	}

	th.lecture {
		height: 40px;
	}

	th.day {
		height: 30px;
	}

	th.date {
		height: 30px;
	}

	th.trainee {
		width: 200px;
		text-align: left;
	}

	th.rotate {
		transform: rotate(-45deg);
	}
</style>	
@endsection
@section('content')	
<span>@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif</span>

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid mt-4" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">كشف حضور المتدربين في دورة:  {{$course->title}}</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
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
							<input type="text" id="attendanceFilterInput" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
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
				<div class="card-body pt-0">
					

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th style="min-width: 150px; position: sticky; left: 0; background-color: white; z-index: 2;">المحاضرة</th>
                @foreach ($lectures as $lecture)
                    <th style="min-width: 100px; position: sticky; top: 0; background-color: white; z-index: 1;">{{ $lecture->title }}</th>
                @endforeach
            </tr>
            <tr>
                <th style="position: sticky; left: 0; background-color: white; z-index: 2;">اليوم</th>
                @foreach ($lectures as $lecture)
                    <th style="position: sticky; top: 0; background-color: white; z-index: 1;">{{ $lecture->date }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-bold">
			<form method="POST" action="{{route('postAttendance',['course'=>$course->id])}}">
				@csrf
				@foreach ($trainees as $trainee)			
					<tr>
						<td>{{ $trainee->name_ar }}</td>
						@foreach ($lectures as $lecture)
							<!-- You can add your attendance input fields here -->
							<td>
								@if($trainee->lectures->contains('id', $lecture->id))
								<input type="hidden" name="status[{{$trainee->id}}][{{$lecture->id}}]" id="attendance-status{{$trainee->id}}{{$lecture->id}}" value="حضور">
								<a type="button" class="attendance-btn btn-success" data-status="حضور" data-trainee="{{$trainee->id}}" data-lecture="{{$lecture->id}}">
									حضور
								</a>
								@else
								<input type="hidden" name="status[{{$trainee->id}}][{{$lecture->id}}]" id="attendance-status{{$trainee->id}}{{$lecture->id}}" value="غياب">
								<a type="button" class="attendance-btn btn-danger" data-status="غياب" data-trainee="{{$trainee->id}}" data-lecture="{{$lecture->id}}">
									غياب
								</a>
								@endif
							</td>
						@endforeach
					</tr>
				@endforeach
				<button class="btn-xs rounded btn-success mb-2 ms-2" type="submit">حفظ</button>
			</form>
        </tbody>
    </table>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const tableContainer = document.querySelector('.table-container');
		const table = document.querySelector('table');
		const firstColumn = document.querySelectorAll('tbody tr td:first-child');
		const firstHeaderCell = document.querySelector('thead tr:first-child th:first-child');
		const secondHeaderCell = document.querySelector('thead tr:nth-child(2) th:first-child');

		tableContainer.addEventListener('scroll', function() {
			table.querySelector('thead').style.transform = `translateY(${this.scrollTop}px)`;
			firstColumn.forEach((cell, index) => {
				cell.style.transform = `translate(${this.scrollLeft}px, 0)`;
			});
			firstHeaderCell.style.transform = `translate(${this.scrollLeft}px, 0)`;
			secondHeaderCell.style.transform = `translate(${this.scrollLeft}px, 0)`;
		});
	});	
</script>
<script>
    let isDragging = false;
    let startX, startY, scrollLeft, scrollTop;

    document.querySelector('.table-container').addEventListener('mousedown', (e) => {
        if (e.button === 0) { // Check if left mouse button is pressed
            isDragging = true;
            startX = e.pageX - document.querySelector('.table-container').offsetLeft;
            startY = e.pageY - document.querySelector('.table-container').offsetTop;
            scrollLeft = document.querySelector('.table-container').scrollLeft;
            scrollTop = document.querySelector('.table-container').scrollTop;
        }
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const x = e.pageX - document.querySelector('.table-container').offsetLeft;
        const y = e.pageY - document.querySelector('.table-container').offsetTop;
        const walkX = (x - startX) * 1; // Adjust the speed of horizontal scrolling
        const walkY = (y - startY) * 1; // Adjust the speed of vertical scrolling
        document.querySelector('.table-container').scrollLeft = scrollLeft - walkX;
        document.querySelector('.table-container').scrollTop = scrollTop - walkY;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
    });
</script>
<style>
    .table-container {
        width: 100%;
        overflow: auto;
    }

    table {
        width: auto;
        table-layout: fixed;
    }

    .table-container table th:first-child,
    .table-container table td:first-child {
        position: sticky;
        left: 0;
        background-color: white;
        z-index: 2;
    }

    .table-container table th {
        position: sticky;
        top: 0;
        background-color: white;
        z-index: 1;
    }
</style>

				</div>
				
				<script>
					document.addEventListener('DOMContentLoaded', function() {
						const buttons = document.querySelectorAll('.attendance-btn');
				
						buttons.forEach(button => {
							button.addEventListener('click', function() {
								const status = this.getAttribute('data-status');
								const trainee = this.getAttribute('data-trainee');
								const lecture = this.getAttribute('data-lecture');
				
								if (status === 'حضور') {
									this.textContent = 'غياب';
									this.setAttribute('data-status', 'غياب');
									this.classList.remove('btn-success');
									this.classList.add('btn-danger');
									element = 'attendance-status' + trainee + lecture; 
        							document.getElementById(element).value = 'غياب';
								} else {
									this.textContent = 'حضور';
									this.setAttribute('data-status', 'حضور');
									this.classList.remove('btn-danger');
									this.classList.add('btn-success');
									element = 'attendance-status' + trainee + lecture; 
        							document.getElementById(element).value = 'حضور';
								}
				
								// You can use trainee and date to update your backend data
							});
						});
					});
				</script>
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
		$('#attendenceTable').DataTable({
			"pageLength": 10, // Number of records per page
			"lengthChange": true, // Hide the option to change the number of records
			"searching": false,
			"ordering": false, // Hide sorting buttons
			language: {
			url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ar.json',
			"info": "" // Remove the information message
			},
		});
	});

	$(document).ready(function () {
        // Search functionality
        $("#attendanceFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#attendenceTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });

	});

	$("body").on("click", "#exportButton", function () {
	var id = $(this).attr("data-id");
	urlx = 'dashboard/export/'+id;
	const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	$.ajax({
        url: urlx,
        type: 'POST',	
		headers: {
            'X-CSRF-TOKEN': csrfToken
          },
        success: function(response) {
			window.location.href = response;
        }
      });

});

</script>
<script>
    function setAttendanceStatus(clickedElement,trainee,lecture) {
		const status = clickedElement.getAttribute('data-status');
		console.log(status)
		element = 'attendance-status' + trainee + lecture; 
        document.getElementById(element).value = status;
    }
</script>
@endsection



