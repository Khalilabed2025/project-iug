@extends('admin.layouts.app')
@section('content')
 <!--begin::Post-->
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl mt-4">
        <?php
			$trimmedUrl = str_replace('www.', '', $course->getFirstMedia('courses')->getUrl());
		?>
        <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{asset($trimmedUrl)}}" alt="image">
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$course->title}}</a>
                                </div>
                                <!--end::Name-->
                                <p class="desc col-lg-6">{{$course->desc}}</p>
                            </div>
                            <!--end::User-->
                   
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-center">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder counted">@if(count($course_trainers)) {{count($course_trainers)}} @else 0 @endif</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="px-4 fw-bold fs-6 text-gray-400">المتدربون</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat--> 
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-center">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder counted">{{$course->capacity}}/@if(count($course_trainees)) {{count($course_trainees)}} @else 0 @endif</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="px-4 fw-bold fs-6 text-gray-400">المتدربون</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="px-9 fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="80">{{$course->hours}}</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="px-4 fw-bold fs-6 text-gray-400">ساعة دراسية</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
            
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Progress-->
                            
                            <!--end::Progress-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
                <!--begin::Navs-->
                <div class="d-flex overflow-auto h-55px">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6 active" href="{{route('courses.show',$course->id)}}#pat_overview" data-toggle="tab">حول الدورة</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a id="teacher_pat" class="nav-link text-active-primary me-6" href="{{route('courses.show',$course->id)}}#pat_teachers" data-toggle="tab">المدربون</a>
                        </li>
                        <!--end::Nav item-->   
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a id="student_pat" class="nav-link text-active-primary me-6" href="{{route('courses.show',$course->id)}}#pat_students" data-toggle="tab">المتدربون</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a id="lecture_pat" class="nav-link text-active-primary me-6" href="{{route('courses.show',$course->id)}}#pat_lectures" data-toggle="tab">محتوى الدورة</a>
                        </li>
                        <!--end::Nav item-->  
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a id="activity_pat" class="nav-link text-active-primary me-6" href="{{route('courses.show',$course->id)}}#pat_activities" data-toggle="tab">الاختبارات والأنشطة</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a id="evaluate_pat" class="nav-link text-active-primary me-6" href="{{route('courses.show',$course->id)}}#pat_evaluates" data-toggle="tab">التقييم والمتابعة</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                </div>
                <!--begin::Navs-->
            </div>
        </div>
        <span>@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif</span>
        <span>@if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif</span>

    </div>
    <!--end::Container-->
    <div class="tab-content">
        <!-- Overview Tab -->
        <div id="pat_overview" class="tab-pane fade show active">
            <!--begin::Toolbar-->
            <div class="toolbar">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الدورات التدريبية</h1>
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
                            <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">{{$course->title}}</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-dark">حول الدورة</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center py-1">
                        <!--begin::Wrapper-->
                        <div class="me-4">
                            <!--begin::Menu-->
                            <a href="{{route('course-overall',$course->id)}}" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <!--end::Svg Icon--> تصدير  تقرير التقييم العام</a>
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <div class="post d-flex flex-column-fluid">
                <!--begin::Container-->
                <div  class="container-xxl">
                    <!--begin::About card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="row card-body p-lg-17">
                        <div class="col-lg-6">
                            <!--begin::Navbar-->
                            <div class="mb-8">
                                <h4 class="fw-bolder">أهداف الدورة</h4>
                                <p>{!!$course->objectives!!}<p>
                            </div> 
                            <div class="mb-8">
                                <h4 class="fw-bolder">المصادر والمراجع</h4>
                                <p>{!!$course->references!!}<p>
                            </div>  
                            <div class="mb-8">
                                <h4 class="fw-bolder">الجهة المستفيدة</h4>
                                <p>{!!$course->beneficiary!!}<p>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-8">
                                <h4 class="fw-bolder">موعد الدورة التدريبية</h4>
                                <p>تبدأ بتاريخ {{$course->start_date}} ــــ تنتهي بتاريخ {{$course->end_date}} <p>
                            </div>   
                            <div class="mb-8">
                                <h4 class="fw-bolder">توقيت الدورة التدريبية</h4>
                                <p>فترة {{$course->time}} <p>
                            </div>  
                            <div class="mb-8">
                                <h4 class="fw-bolder">الفئة المستهدفة</h4>
                                <p>{!!$course->destination!!}<p>
                            </div>  
                            <div class="mb-8">
                                <h4 class="fw-bolder">متطلبات الإلتحاق</h4>
                                <p>{!!$course->requirments!!}<p>
                            </div> 
                        </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::About card-->
                </div>
                <!--end::Container-->
            </div>
        </div>
        <!-- Overview Tab -->
        <div id="pat_teachers" class="tab-pane fade">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الدورات التدريبية</h1>
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
                                <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$course->title}}</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">المدربون</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="{{route('course-overall',$course->id)}}" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <!--end::Svg Icon--> تصدير  تقرير التقييم العام</a>
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" >
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
                                        <input type="text" id="trainersFilterInput" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن مدرب" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Export-->
                                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_trainers">
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
                                        <button id="AddBtntrainers" type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_trainer">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->اضافة مدرب</button>
                                        <!--end::Add user--> 
                                        <!--begin::Add user-->
                                        <button type="button" class="multipleDeleteBtn btn btn-light-primary me-3" data-type="trainers" data-url="dashboard/courses/deleteTrainer/{{$course->id}}">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->حذف المحدد</button>
                                        <!--begin::Modal - Adjust Balance-->
                                        <div class="modal fade" id="kt_modal_export_trainers" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">تصدير تقييم المدربين</h2>
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
                                                        <form class="form" method="POST" action="{{route('course-trainers',$course->id)}}">
                                                            @csrf
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-bold form-label mb-2">المدرب:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="trainer" data-control="select" data-placeholder="اختر المدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                                                    <option value = "all">كل المدربين</option>
                                                                    @foreach ($trainers as $trainer)
                                                                    <option value="{{$trainer->id}}">{{$trainer->name}}</option>
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
                                        <!--end::Add user-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
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
                                <table id="trainersTable" class="table align-middle table-row-dashed fs-6 gy-2">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input selectAll" data-type="trainers" type="checkbox" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-150px">المدرب</th>
                                            <th class="min-w-90px">الهاتف</th>
                                            <th class="min-w-90px">التخصص</th>
                                            <th class="min-w-90px">العنوان</th>
                                            <th class="min-w-90px">تاريخ الانضمام</th>
                                            <th class="min-w-100px">إجراءات</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @if(count($course_trainers))
                                            @foreach($course_trainers as $trainer)	
                                                <?php
                                                if($trainer->getFirstMedia('trainers')){
                                                $trimmedUrl = str_replace('www.', '', $trainer->getFirstMedia('trainers')->getUrl());
                                                }else{
                                                $trimmedUrl	='#';
                                                }
                                                $date = new DateTime($trainer->created_at);
                                                $formattedDate = $date->format('d M Y, g:i a');
                                                ?>	
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Checkbox-->
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="rowCheckbox form-check-input" data-type="trainers" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="{{route('trainers.show',$trainer->id)}}">
                                                                <div class="symbol-label">
                                                                    <img src="{{$trimmedUrl}}" alt="مدرب" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::User details-->
                                                        <div class="d-flex flex-column">
                                                            <a href="{{route('trainers.show',$trainer->id)}}" class="text-gray-800 text-hover-primary mb-1">{{$trainer->name}}</a>
                                                            <span>{{$trainer->email}}</span>
                                                        </div>
                                                        <!--begin::User details-->
                                                    </td>
                                                    <!--end::User=-->
                                                    <!--begin::Phone=-->
                                                    <td>{{$trainer->phone}}</td>
                                                    <!--end::Phone=-->
                                                    <!--begin::Last login=-->
                                                    <td>
                                                        <div class="badge badge-light fw-bolder">{{$trainer->specilization}}</div>
                                                    </td>
                                                    <!--end::Last login=-->
                                                    <!--begin::Two step=-->
                                                    <td>{{$trainer->address}}</td>
                                                    <!--end::Two step=-->
                                                    <!--begin::Joined-->
                                                    <td>{{$formattedDate}}</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td class="text-start">
                                                        <a href="javascript:void(0)" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" class="btn btn-light btn-active-light-primary btn-sm">إجراءات
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></a>
                                                        <!--begin::Menu-->
                                                        <div data-kt-menu="true"class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="{{route('trainers.edit',$trainer->id)}}" class="menu-link px-3">تعديل</a>
                                                            </div>
                                                            <!--end::Menu item--> 
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-2">
                                                                <a  data-bs-toggle="modal" data-bs-target="#kt_modal_evaluate_trainer-{{$trainer->id}}" href="" class="menu-link px-3">تصدير حالة المدرب</a>
                                                            </div>
                                                            <!--end::Menu item--> 
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a type="button" class="DeleteBtn menu-link px-3"  data-id="{{$trainer->id}}" data-url="dashboard/courses/deleteTrainer/{{$course->id}}/{{$trainer->id}}">حذف</a>
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
        </div>
        <!-- Overview Tab -->
        <div id="pat_students" class="tab-pane fade">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الدورات التدريبية</h1>
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
                                <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$course->title}}</li>
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
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="{{route('course-overall',$course->id)}}" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <!--end::Svg Icon--> تصدير  تقرير التقييم العام</a>
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" >
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
                                        <input type="text" id="traineesFilterInput" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن متدرب" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Export-->
                                        <a type="button" href="{{route('getAttendance',['course'=>$course->id])}}" class="btn btn-light-primary me-3">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                        <!--end::Svg Icon-->كشف الحضور الكلي</a>
                                        <!--end::Export-->
                                        <!--begin::Export-->
                                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_sd">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
                                                <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
                                                <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->تصدير تقييم المتدربين</button>
                                        <!--end::Export-->
                                        <!--begin::Add user-->
                                        <button id="AddBtntrainees" type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_trainee">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->اضافة متدرب</button>
                                        <!--end::Add user--> 
                                        <!--begin::Add user-->
                                        <button type="button" class="multipleDeleteBtn btn btn-light-primary me-3" data-type="trainees" data-url="dashboard/courses/deleteTrainee/{{$course->id}}">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->حذف المحدد</button>
                                        <!--end::Add user-->
                                        <!--begin::Add user-->
                                        <button id="multipleTraineeAttend" type="button" class="btn btn-light-primary me-3" data-type="trainees">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->تسجيل حضور المحدد</button>
                                        <!--end::Add user-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table id="traineeTable" class="table align-middle table-row-dashed fs-6 gy-2">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input selectAll" data-type="trainees" type="checkbox" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-150px">المدرب</th>
                                            <th class="min-w-90px">رقم المتدرب</th>
                                            <th class="min-w-90px">العنوان</th>
                                            <th class="min-w-90px">الهاتف</th>
                                            <th class="min-w-90px">تاريخ الانضمام</th>
                                            <th class="min-w-100px">إجراءات</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @if(count($course_trainees))
                                            @foreach($course_trainees as $trainee)	
                                                <?php
                                                if($trainee->getFirstMedia('trainees')){
                                                $trimmedUrl = str_replace('www.', '', $trainee->getFirstMedia('trainees')->getUrl());
                                                }else{
                                                $trimmedUrl	='#';
                                                }
                                                $date = new DateTime($trainee->created_at);
                                                $formattedDate = $date->format('d M Y, g:i a');
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
                                                                    <img src="{{$trimmedUrl}}" alt="مدرب" class="w-100" />
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
                                                    <td>{{$trainee->trainee_id}}</td>
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
                                                        <a href="javascript:void(0)" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" class="btn btn-light btn-active-light-primary btn-sm">إجراءات
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></a>
                                                        <!--begin::Menu-->
                                                        <div data-kt-menu="true"class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4">                                                             
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <button type="submit" style=" background: none;
                                                                border: none; font-weight: bolder;cursor: pointer;" class="menu-link px-2"> تصدير حالة المتدرب</button>
                                                            </div>
                                                             <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                @php
                                                                    $mytime = Illuminate\Support\Carbon::now()->format('Y-m-d');  
                                                                    if(!is_Null($today_lecture)){
                                                                        $attend = App\Models\Attendance::where('lecture_id',$today_lecture->id)->where('trainee_id',$trainee->id)->first();     
                                                                    }else{
                                                                        $attend = Null;
                                                                    }
                                                                @endphp
                                                                <a @if(!is_Null($attend)) hidden @endif  type="button" class="traineeAttendBtn menu-link px-2"  data-trainee="{{$trainee->id}}" data-course="{{$course->id}}">تسجيل حضور اليوم</a>
                                                                <a @if(is_Null($attend)) hidden @endif type="button" class="traineeAbsentBtn menu-link px-2"  data-trainee="{{$trainee->id}}" data-course="{{$course->id}}">إلغاء تسجيل حضور اليوم</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a type="button" class="menu-link px-2"  data-bs-toggle="modal" data-bs-target="#kt_modal_add_attend_{{$trainee->id}}">تسجيل حضور لمحاضرة</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="{{route('trainees.edit',$trainee->id)}}" class="menu-link px-3">تعديل</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a type="button" class="DeleteBtn menu-link px-3"  data-id="{{$trainee->id}}" data-url="dashboard/courses/deleteTrainee/{{$course->id}}/{{$trainee->id}}">حذف</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Modal -->
                                                <div class="modal fade" id="kt_modal_add_attend_{{$trainee->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <?php
                                                    $trainee_lectures = $trainee->lectures->pluck('id');
                                                    $trainee_lectures = $course_Lectures->whereNotIn('id',$trainee_lectures);
                                                    ?>
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تسجيل الحضور لمحاضرة معينة</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                                <form method="POST" class="form" action="{{route('attendLecture',['traineeId'=>$trainee->id])}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row g-9 mb-8">
                                                                        <div class="col-md-12 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-6 fw-bold form-label mb-2">المحاضرة:</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <select id="select_lecture_{{$trainee->id}}" name="lecture" data-control="select1" data-placeholder="اختر النوع" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                                                                <option></option>
                                                                                @if(count($trainee_lectures))
                                                                                    @foreach ($trainee_lectures as $lecture)
                                                                                        <option value="{{$lecture->id}}">{{$lecture->title}}</option>    
                                                                                    @endforeach
                                                                                @endif                 
                                                                            </select>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                    </div>        
                                                              
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">إضافة
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
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
        </div>
        <!--end::Content-->
        <div id="pat_lectures" class="tab-pane fade">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الدورات التدريبية</h1>
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
                                <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$course->title}}</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">محتوى الدورة</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="{{route('course-overall',$course->id)}}" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <!--end::Svg Icon--> تصدير  تقرير التقييم العام</a>
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" >
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
                                        <input type="text" id="lectureFilterInput" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن متدرب" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Export-->
                                        <!--end::Export-->
                                            <!--begin::Add user-->
                                            <button id="" type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_lecture">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->تصدير تقييم المحتوى</button>
                                        <!--end::Add user--> 
                                        <!--begin::Add user-->
                                        <button id="" type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_lecture">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->اضافة محاضرة</button>
                                        <!--end::Add user--> 
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-10">
                                <!--begin::Table-->
                                <table id="lectureTable" class="table align-middle table-row-dashed fs-6 gy-2">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input"  id="selectAllLectures" type="checkbox" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-150px">عنوان المحاضرة</th>
                                            <th class="min-w-100px">االمدرب</th>
                                            <th class="min-w-100px">تاريخ المحاضرة</th>
                                            <th class="min-w-90px">من</th>
                                            <th class="min-w-90px">إلى</th>
                                            <th class="min-w-90px">عدد الساعات</th>
                                            <th class="min-w-100px">تاريخ الاضافة</th>
                                            <th class="min-w-100px">إجراءات</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @if(count($course_Lectures))
                                            @foreach($course_Lectures as $lecture)	
                                                <?php
                                                $date = new DateTime($lecture->created_at);
                                                $formattedDate = $date->format('Y-m-d');
                                                ?>	
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Checkbox-->
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="rowCheckbox form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td>
                                                        <!--begin::User details-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)" class="text-gray-800 text-hover-primary mb-1">{{$lecture->title}}</a>
                                                        </div>
                                                        <!--begin::User details-->
                                                    </td>
                                                    <!--end::User=-->
                                                    <!--begin::Joined-->
                                                    <td>{{$lecture->trainer->name}}</td>
                                                    <td>{{$lecture->date}}</td>
                                                    <td>{{$lecture->from}}</td>
                                                    <td>{{$lecture->to}}</td>
                                                    <td>{{$lecture->hours}}</td>
                                                    <td>{{$formattedDate}}</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td>
                                                        <a href="javascript:void(0)" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" class="btn btn-light btn-active-light-primary btn-sm">إجراءات
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></a>
                                                        <!--begin::Menu-->
                                                        <div data-kt-menu="true"class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a  data-bs-toggle="modal" data-bs-target="#kt_modal_edit_lectures_{{$lecture->id}}" href="" class="menu-link px-3">تعديل</a>
                                                            </div>
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a  data-bs-toggle="modal" data-bs-target="#kt_modal_evaluate_lectureTrainer_{{$lecture->id}}" href="" class="menu-link px-3">تقييم المدرب</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a data-lecture="{{$lecture->id}}" data-course="{{$course->id}}" data-bs-toggle="modal" data-bs-target="#kt_modal_evaluate_lectureContent_{{$lecture->id}}" href="" class="getContent menu-link px-3">تقييم المحتوي</a>
                                                            </div>
                                                            <!--end::Menu item--> 
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a data-lecture="{{$lecture->id}}" data-course="{{$course->id}}"  data-bs-toggle="modal" data-bs-target="#kt_modal_evaluate_lecturePlace_{{$lecture->id}}" href="" class="getPlace menu-link px-3">تقييم المكان</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a type="button" class="menu-link px-3">حذف</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_edit_lectures_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تعديل المحاضرة</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                                <form method="POST" class="form" action="{{route('updateLecture',['lecture'=>$lecture->id])}}">
                                                                    @csrf                                                     
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-4">
                                                                        <label class="fs-6 fw-bold mb-2">عنوان المحاضرة</label>
                                                                        <input type="text" class="form-control form-control-solid" name="title" value="{{$lecture->title}}"/>
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <div class="row g-9 mb-8">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                         <!--begin::Label-->
                                                                         <label class="fs-6 fw-bold form-label mb-2">اختر المدرب:</label>
                                                                         <!--end::Label-->
                                                                         <!--begin::Input-->
                                                                         <select name="trainer" data-control="select1" data-placeholder="اختر المدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                                                             <option></option>
                                                                             @foreach ($course_trainers as $trainer)
                                                                             <option @if($lecture->trainer)@if($lecture->trainer->id === $trainer->id) selected @endif @endif value="{{$trainer->id}}">{{$trainer->name}}</option>
                                                                             @endforeach
                                                 
                                                                         </select>
                                                                         <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <label class="required fs-6 fw-bold mb-2">التاريخ</label>
                                                                            <input type="date" class="form-control form-control-solid" placeholder="أدخل التاريخ" name="date" value="{{$lecture->date}}">
                                                                            <span></span>
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                
                                                                    <div class="row g-9 mb-8">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <label class="required fs-6 fw-bold mb-2">من</label>
                                                                            <input id="lectureStartTime1" type="time" class="form-control form-control-solid" placeholder="بداية المحاضرة" name="from" value="{{$lecture->from}}">
                                                                            <span></span>
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <label class="required fs-6 fw-bold mb-2">إلى</label>
                                                                            <input id="lectureEndTime1" type="time" class="form-control form-control-solid" placeholder="نهاية المحاضرة" name="to" value="{{$lecture->to}}">
                                                                            <span></span>
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تعديل
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
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_evaluate_lectureTrainer_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تقييم  مدرب المحاضرة: {{$lecture->title}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15">
                                                                <!--begin::Form-->
                                                                <form method="POST" class="form" action="{{route('evaluateLecture',['course'=>$course->id,'lecture'=>$lecture->id])}}">
                                                                    @csrf
                                                                    
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-bold form-label mb-2">اختر المدرب:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select id="selectTrainer" name="trainer" data-control="select" data-placeholder="اختر المتدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder" data-course="{{$course->id}}" data-lecture="{{$lecture->id}}">
                                                                            <option></option>
                                                                            @foreach ($course_trainers as $trainer)
                                                                            <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold form-label mb-2 bg-secondary">تقييم المدرب في المحاور التالية %</label>
                                                                    <!--end::Label-->
                                                                    </div>
                                                                        <!--begin::Input group-->
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">الإلمام بمواضيع المحاضرة</label>
                                                                        <input type="number" class="rate1{{$lecture->id}} w-15 form-control form-control-solid" name="rate[1]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">توصيل المعلومة وإكساب المهارات</label>
                                                                        <input type="number" class="rate2{{$lecture->id}} w-15 form-control form-control-solid" name="rate[2]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">تنظيم المحاضرة (الوضوح والكفاية)</label>
                                                                        <input type="number" class="rate3{{$lecture->id}} w-15 form-control form-control-solid" name="rate[3]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">التنويع في الأنشطة والوسائل</label>
                                                                        <input type="number" class="rate4{{$lecture->id}} w-15 form-control form-control-solid" name="rate[4]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-5">
                                                                        <label class="fs-6 fw-bold mb-2">القدرة على تحفيز المشاركين</label>
                                                                        <input type="number" class="rate5{{$lecture->id}} w-15 form-control form-control-solid" name="rate[5]" />
                                                                    </div>
                                                                    <!--end::Input group--> 
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تقييم
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
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_evaluate_lectureContent_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تقييم  محتوى المحاضرة: {{$lecture->title}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15">
                                                                <!--begin::Form-->
                                                                <form method="POST" class="form" action="{{route('evaluate',['course'=>$course->id,'lecture'=>$lecture->id])}}">
                                                                    @csrf
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold form-label mt-6 bg-secondary">تقييم المحتوى والتأثير %</label>
                                                                    <!--end::Label-->
                                                                    </div>
                                                                        <!--begin::Input group-->
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">المحتوى يتوافق مع أهداف البرنامج</label>
                                                                        <input type="number" class="rate6{{$lecture->id}} w-15 form-control form-control-solid" name="rate[6]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">تراعي التطور في المفاهيم والنظريات الحديثة</label>
                                                                        <input type="number" class="rate7{{$lecture->id}} w-15 form-control form-control-solid" name="rate[7]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">تتكامل في محتوياتها من حيث المهارات والمعارف</label>
                                                                        <input type="number" class="rate8{{$lecture->id}} w-15 form-control form-control-solid" name="rate[8]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">أكسبتك المحاضرات المهارة والخبرة المرجوة</label>
                                                                        <input type="number" class="rate9{{$lecture->id}} w-15 form-control form-control-solid" name="rate[9]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-5">
                                                                        <label class="fs-6 fw-bold mb-2">حققت المحاضرة توقعاتك العلمية المرجوة</label>
                                                                        <input type="number" class="rate10{{$lecture->id}} w-15 form-control form-control-solid" name="rate[10]" />
                                                                    </div>
                                                                    <!--end::Input group--> 
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تقييم
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
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_evaluate_lecturePlace_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تقييم مكان المحاضرة: {{$lecture->title}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15">
                                                                <!--begin::Form-->
                                                                <form method="POST" class="form" action="{{route('evaluate',['course'=>$course->id,'lecture'=>$lecture->id])}}">
                                                                    @csrf
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold form-label mt-6 bg-secondary">تقييم المكان والخدمات التدريبية %</label>
                                                                    <!--end::Label-->
                                                                    </div>
                                                                        <!--begin::Input group-->
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">مناسبة مكان انعقاد الدورة</label>
                                                                        <input type="number" class="rate11{{$lecture->id}} w-15 form-control form-control-solid" name="rate[11]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">توفر الأجهزة والمعدات اللازمة</label>
                                                                        <input type="number" class="rate12{{$lecture->id}} w-15 form-control form-control-solid" name="rate[12]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">توفر الضيافة والأمور اللوجستية</label>
                                                                        <input type="number" class="rate13{{$lecture->id}} w-15 form-control form-control-solid" name="rate[13]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-10">
                                                                        <label class="fs-6 fw-bold mb-2">مستوى اهتمام ومتابعة منسق الدورة</label>
                                                                        <input type="number" class="rate14{{$lecture->id}} w-15 form-control form-control-solid" name="rate[14]" />
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تقييم
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
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
        </div>
        <!--end::Content-->
        <div id="pat_activities" class="tab-pane fade">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الدورات التدريبية</h1>
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
                                <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$course->title}}</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">الاختبارات والأنشطة</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="{{route('course-overall',$course->id)}}" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <!--end::Svg Icon--> تصدير  تقرير التقييم العام</a>
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" >
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
                                        <input type="text" id="activityFilterInput" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن اختبار أو نشاط" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Export-->
                                        <!--end::Export-->
                                    {{--      <!--begin::Add user-->
                                            <button id="" type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_lecture">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->تصدير تقييم المحتوى</button>
                                        <!--end::Add user-->  --}}
                                        <!--begin::Add user-->
                                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_activity">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->اضافة نشاط جديد</button>
                                        <!--end::Add user--> 
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-10">
                                <!--begin::Table-->
                                <table id="activityTable" class="table align-middle table-row-dashed fs-6 gy-2">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input"  id="selectAllActivities" type="checkbox" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-150px">اسم الاختبار أو النشاط</th>
                                            <th class="min-w-100px">النوع</th>
                                            <th class="min-w-100px">تاريخ النهاية</th>
                                            <th class="min-w-90px">الملف</th>
                                            <th class="min-w-100px">تاريخ الاضافة</th>
                                            <th class="min-w-100px">إجراءات</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @if(count($course_activities))
                                            @foreach($course_activities as $activity)	
                                                <?php
                                                $date1 = new DateTime($activity->dead_line);
                                                $formattedDate1 = $date1->format('Y-m-d');  
                                                $date2 = new DateTime($activity->created_at);
                                                $formattedDate2 = $date2->format('Y-m-d');
                                                ?>	
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Checkbox-->
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="rowCheckbox form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td>
                                                        <!--begin::User details-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)" class="text-gray-800 text-hover-primary mb-1">{{$lecture->title}}</a>
                                                        </div>
                                                        <!--begin::User details-->
                                                    </td>
                                                    <!--end::User=-->
                                                    <!--begin::Joined-->
                                                    <td>{{$activity->type}}</td>
                                                    <td>{{$formattedDate1}}</td>
                                                    <td><button class="downloadFile btn-xs btn-success" data-name= "{{$activity->file}}">تحميل الملف</button></td>
                                                    <td>{{$formattedDate2}}</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td>
                                                        <a href="javascript:void(0)" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" class="btn btn-light btn-active-light-primary btn-sm">إجراءات
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></a>
                                                        <!--begin::Menu-->
                                                        <div data-kt-menu="true"class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a  data-bs-toggle="modal" data-bs-target="#kt_modal_edit_activities_{{$activity->id}}" href="" class="menu-link px-3">تعديل</a>
                                                            </div>
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a type="button" class="menu-link px-3"  data-activity="{{$activity->id}}" data-course="{{$course->id}}">حذف</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_edit_activities_{{$activity->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تعديل المحاضرة</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                                <form method="POST" class="form" action="{{route('addTrainer',['course'=>$course->id])}}">
                                                                    @csrf
                                                                
                                                                
                            
                                                                
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">عنوان المحاضرة</label>
                                                                        <input type="text" class="form-control form-control-solid" name="title" />
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تعديل
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
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_evaluate_lectureTrainer_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تقييم  مدرب المحاضرة: {{$lecture->title}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15">
                                                                <!--begin::Form-->
                                                                <form method="POST" class="form" action="{{route('evaluateLecture',['course'=>$course->id,'lecture'=>$lecture->id])}}">
                                                                    @csrf
                                                                    
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-bold form-label mb-2">اختر المدرب:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select id="selectTrainer" name="trainer" data-control="select" data-placeholder="اختر المدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder" data-course="{{$course->id}}" data-lecture="{{$lecture->id}}">
                                                                            <option></option>
                                                                            @foreach ($course_trainers as $trainer)
                                                                            <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold form-label mb-2 bg-secondary">تقييم المدرب في المحاور التالية %</label>
                                                                    <!--end::Label-->
                                                                    </div>
                                                                        <!--begin::Input group-->
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">الإلمام بمواضيع المحاضرة</label>
                                                                        <input type="number" class="rate1{{$lecture->id}} w-15 form-control form-control-solid" name="rate[1]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">توصيل المعلومة وإكساب المهارات</label>
                                                                        <input type="number" class="rate2{{$lecture->id}} w-15 form-control form-control-solid" name="rate[2]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">تنظيم المحاضرة (الوضوح والكفاية)</label>
                                                                        <input type="number" class="rate3{{$lecture->id}} w-15 form-control form-control-solid" name="rate[3]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">التنويع في الأنشطة والوسائل</label>
                                                                        <input type="number" class="rate4{{$lecture->id}} w-15 form-control form-control-solid" name="rate[4]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-5">
                                                                        <label class="fs-6 fw-bold mb-2">القدرة على تحفيز المشاركين</label>
                                                                        <input type="number" class="rate5{{$lecture->id}} w-15 form-control form-control-solid" name="rate[5]" />
                                                                    </div>
                                                                    <!--end::Input group--> 
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تقييم
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
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_evaluate_lectureContent_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تقييم  محتوى المحاضرة: {{$lecture->title}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15">
                                                                <!--begin::Form-->
                                                                <form method="POST" class="form" action="{{route('evaluate',['course'=>$course->id,'lecture'=>$lecture->id])}}">
                                                                    @csrf
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold form-label mt-6 bg-secondary">تقييم المحتوى والتأثير %</label>
                                                                    <!--end::Label-->
                                                                    </div>
                                                                        <!--begin::Input group-->
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">المحتوى يتوافق مع أهداف البرنامج</label>
                                                                        <input type="number" class="rate6{{$lecture->id}} w-15 form-control form-control-solid" name="rate[6]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">تراعي التطور في المفاهيم والنظريات الحديثة</label>
                                                                        <input type="number" class="rate7{{$lecture->id}} w-15 form-control form-control-solid" name="rate[7]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">تتكامل في محتوياتها من حيث المهارات والمعارف</label>
                                                                        <input type="number" class="rate8{{$lecture->id}} w-15 form-control form-control-solid" name="rate[8]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">أكسبتك المحاضرات المهارة والخبرة المرجوة</label>
                                                                        <input type="number" class="rate9{{$lecture->id}} w-15 form-control form-control-solid" name="rate[9]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-5">
                                                                        <label class="fs-6 fw-bold mb-2">حققت المحاضرة توقعاتك العلمية المرجوة</label>
                                                                        <input type="number" class="rate10{{$lecture->id}} w-15 form-control form-control-solid" name="rate[10]" />
                                                                    </div>
                                                                    <!--end::Input group--> 
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تقييم
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
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_evaluate_lecturePlace_{{$lecture->id}}" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">تقييم مكان المحاضرة: {{$lecture->title}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15">
                                                                <!--begin::Form-->
                                                                <form method="POST" class="form" action="{{route('evaluate',['course'=>$course->id,'lecture'=>$lecture->id])}}">
                                                                    @csrf
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold form-label mt-6 bg-secondary">تقييم المكان والخدمات التدريبية %</label>
                                                                    <!--end::Label-->
                                                                    </div>
                                                                        <!--begin::Input group-->
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">مناسبة مكان انعقاد الدورة</label>
                                                                        <input type="number" class="rate11{{$lecture->id}} w-15 form-control form-control-solid" name="rate[11]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">توفر الأجهزة والمعدات اللازمة</label>
                                                                        <input type="number" class="rate12{{$lecture->id}} w-15 form-control form-control-solid" name="rate[12]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-2">
                                                                        <label class="fs-6 fw-bold mb-2">توفر الضيافة والأمور اللوجستية</label>
                                                                        <input type="number" class="rate13{{$lecture->id}} w-15 form-control form-control-solid" name="rate[13]" />
                                                                    </div>
                                                                    <div class="col-md-12 d-flex align-items-center justify-content-between mb-10">
                                                                        <label class="fs-6 fw-bold mb-2">مستوى اهتمام ومتابعة منسق الدورة</label>
                                                                        <input type="number" class="rate14{{$lecture->id}} w-15 form-control form-control-solid" name="rate[14]" />
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                                                                        <button type="submit" class="btn btn-primary">تقييم
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
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
        </div>
        <div id="pat_evaluates" class="tab-pane fade">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الدورات التدريبية</h1>
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
                                <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted"></li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">التقييم والمتابعة</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <!--end::Svg Icon--> تصدير  تقرير التقييم العام</a>
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" >
                    <!--begin::Container-->
                    <div class="container-xxl">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6">
                                <!--begin::Input group-->
                                <div class="mb-2">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">اختر المتدرب:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select id="selectTrainee" name="trainee" data-control="select1" data-placeholder="اختر المتدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder" data-course="{{$course->id}}">
                                        <option></option>
                                        @foreach ($course_trainees as $trainee)
                                        <option value="{{$trainee->id}}">{{$trainee->name_ar}}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                         <?php
                         $lectures1=['lec1','lec2'];
                         $trainees1 = ['trai','traine'];
                         ?>
                      <style>
                        table {
                            border-collapse: collapse;
                            width: 70%;
                        }
                    
                        th, td {
                            border: 1px solid #ccc;
                            text-align: center;
                            height: 40px;
                        }
                    
                        th {
                            background-color: #969696;
                        } 
                    </style>
                            <div class="card-body pt-10">
                                <div class="table-container">
                                    <h3>الإختبارات</h3>
                                    <table id="examsTable">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 15px;">#</th>
                                                <th style="min-width: 180px;">الإختبار</th>
                                                <th style="min-width: 70px;">الحالة</th>
                                                <th style="min-width: 70px;">الدرجة</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-bold">
                                                @csrf
                                                @foreach ($trainees1 as $trainee)			
                                                    <tr>
                                                        <td>1</td>
                                                        <td>123</td>
                                                        <td class="d-flex justify-content-center">  
                                                            <select name="trainee" data-control="select1" data-placeholder="اختر المتدرب" data-hide-search="true" class="form-select form-select-sm w-80px fw-bolder">
                                                                <option>تم</option>
                                                                <option>لم يتم</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control w-80px form-control-sm"  type="text" name="" id="">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>   
                                <div class="table-container mt-4">
                                    <h3>النشاطات</h3>
                                    <table id="examsTable">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 15px;">#</th>
                                                <th style="min-width: 180px;">الإختبار</th>
                                                <th style="min-width: 70px;">الحالة</th>
                                                <th style="min-width: 70px;">الدرجة</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-bold">
                                                @csrf
                                                @foreach ($trainees1 as $trainee)			
                                                    <tr>
                                                        <td>1</td>
                                                        <td>123</td>
                                                        <td class="d-flex justify-content-center">  
                                                            <select name="trainee" data-control="select1" data-placeholder="اختر المتدرب" data-hide-search="true" class="form-select form-select-sm w-80px fw-bolder">
                                                                <option>تم</option>
                                                                <option>لم يتم</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control w-80px form-control-sm"  type="text" name="" id="">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
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
        </div>
    </div>



<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Set First Target</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-bold fs-5">If you need more info, please check
                        <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Target Title</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Assign</label>
                            <select class="form-select form-select-solid" data-control="select1" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                                <option value="">Select user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Due Date</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                        <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                        <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Target Details</label>
                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tags</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-bold">Adding Users by Team Members</label>
                            <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-bold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-bold me-5">
                                <label class="fs-6">Notifications</label>
                                <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
                                    <span class="form-check-label fw-bold">Email</span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
                                    <span class="form-check-label fw-bold">Phone</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="kt_modal_add_trainer" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">إضافة مدرب للدورة</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                <form method="POST" class="form" action="{{route('addTrainer',['course'=>$course->id])}}">
                    @csrf
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">اختر المدرب:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="trainer" data-control="select1" data-placeholder="اختر المدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                            <option></option>
                            @foreach ($trainers as $trainer)
                            <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                            @endforeach

                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">إضافة
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
<div class="modal fade" id="kt_modal_add_trainee" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">إضافة متدرب للدورة</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                <form method="POST" class="form" action="{{route('addTrainee',['course'=>$course->id])}}">
                    @csrf
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">اختر المتدرب:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="trainee" data-control="select1" data-placeholder="اختر المتدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                            <option></option>
                            @foreach ($trainees as $trainee)
                            <option value="{{$trainee->id}}">{{$trainee->name_ar}}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">إضافة
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
<!--end::Modal - New Card--><!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="kt_modal_add_lecture" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">إضافة محاضرة جديدة للدورة</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                <form method="POST" class="form" action="{{route('addLecture',['course'=>$course->id])}}">
                    @csrf
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">عنوان المحاضرة</label>
                            <input type="text" class="form-control form-control-solid" placeholder="أدخل اسم المحاضرة" name="title">
                            <span></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                         <!--begin::Label-->
                         <label class="fs-6 fw-bold form-label mb-2">اختر المدرب:</label>
                         <!--end::Label-->
                         <!--begin::Input-->
                         <select name="trainer" data-control="select1" data-placeholder="اختر المدرب" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                             <option></option>
                             @foreach ($course_trainers as $trainer)
                             <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                             @endforeach
 
                         </select>
                         <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">التاريخ</label>
                            <input type="date" class="form-control form-control-solid" placeholder="أدخل التاريخ" name="date">
                            <span></span>
                        </div>
                        <!--end::Col-->
                    </div>
                
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">من</label>
                            <input id="lectureStartTime" type="time" class="form-control form-control-solid" placeholder="بداية المحاضرة" name="from">
                            <span></span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">إلى</label>
                            <input id="lectureEndTime" type="time" class="form-control form-control-solid" placeholder="نهاية المحاضرة" name="to">
                            <span></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">إضافة
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
<!--end::Modal - New Card--><!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="kt_modal_add_activity" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">إضافة اختبار أو نشاط جديد للدورة</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                <form method="POST" class="form" action="{{route('addActivity',['course'=>$course->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">اسم الاختبار أو النشاط</label>
                            <input type="text" class="form-control form-control-solid" placeholder="أدخل اسم الاختبار أو النشاط" name="title">
                            <span></span>
                        </div>
                        <!--end::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">النوع:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="type" data-control="select1" data-placeholder="اختر النوع" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                <option></option>
                                <option value="اختبار">اختبار</option>
                                <option value="نشاط">نشاط</option>                     
                            </select>
                            <!--end::Input-->
                           </div>
                    </div>        
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">الملف</label>
                            <input type="file" class="form-control form-control-solid" placeholder="قم بارفاق الملف" name="file">
                            <span></span>
                        </div>
                        <!--end::Col-->               
                    </div>  
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">وقت النهاية</label>
                            <input  type="date" class="form-control form-control-solid" placeholder="وقت النهاية" name="dead_line">
                            <span></span>
                        </div>
                        <!--end::Col-->               
                    </div>
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary">إضافة
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



@endsection

@section('scripts')


<script>
    $(document).ready(function () {
        $('.nav-link').click(function () {
            $(this).tab('show');
        });
    });

    $(document).ready(function () {
        $("#multipleTraineeAttend").hide()
        // Search functionality
        $("#trainersFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#trainersTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
        $("#traineeFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#traineeTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });  
        $("#lectureFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#lectureTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        }); 
        $("#activityFilterInput").on("keyup", function () {
            const searchText = $(this).val().toLowerCase();
            $("#activityTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
    });

    $("body").on("click", ".traineeAttendBtn", function () {
        var trainee = $(this).attr("data-trainee");
        var course = $(this).attr("data-course");
        url = "dashboard/courses/attendTrainee/"+course+"/"+trainee
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                Swal.fire({
                    text: response.message,
                    icon: response.value,
                    confirmButtonText: 'حسناً!'
                }).then(function() {
                if (response.value == 'success'){
                            $.ajax({
                            url: 'dashboard/getAttend/'+trainee+'/'+course, // Replace with the actual URL
                            type: 'GET',
                            success: function(secondResponse) {
                                // Handle the response and append it to the page
                                // You can customize this part based on your needs
                                $("#select_lecture_"+trainee).html(secondResponse);
                            },
                            error: function() {
                                // Handle errors for the second AJAX request
                            }
                        });
                    $('.traineeAttendBtn[data-trainee="' + trainee + '"]').attr('hidden', 'hidden');
                    $('.traineeAbsentBtn[data-trainee="' + trainee + '"]').removeAttr('hidden');

                }
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    text: 'لم يتم تسجيل الحضور.',
                    icon: 'error',
                    confirmButtonText: 'حسناً!'
                });
            }
        });
    }); 
    $("body").on("click", ".traineeAbsentBtn", function () {
        var trainee = $(this).attr("data-trainee");
        var course = $(this).attr("data-course");
        url = "dashboard/courses/absentTrainee/"+course+"/"+trainee
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                Swal.fire({
                    text: response.message,
                    icon: response.value,
                    confirmButtonText: 'حسناً!'
                }).then(function() {
                if (response.value == 'success'){
                    $.ajax({
                            url: 'dashboard/getAttend/'+trainee+'/'+course, // Replace with the actual URL
                            type: 'GET',
                            success: function(secondResponse) {
                                // Handle the response and append it to the page
                                // You can customize this part based on your needs
                                $("#select_lecture_"+trainee).html(secondResponse);
                            },
                            error: function() {
                                // Handle errors for the second AJAX request
                            }
                        });
                    $('.traineeAttendBtn[data-trainee="' + trainee + '"]').removeAttr('hidden');
                    $('.traineeAbsentBtn[data-trainee="' + trainee + '"]').attr('hidden', 'hidden');
                    }
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    text: 'لم يتم إلغاء تسجيل الدخول.',
                    icon: 'error',
                    confirmButtonText: 'حسناً!'
                });
            }
        });
    });

      //Ajax request for attend Multiple rows
    $("#multipleTraineeAttend").on("click", function () {
        const selectedRows = $(".rowCheckbox:checked").closest("tr");
        if (selectedRows.length > 0) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            Swal.fire({
                text: 'تأكيد تسجيل حضور المتدربين؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'نعم، قم بالتسجيل!',
                cancelButtonText: 'لا،الغاء',
                customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    selectedRows.each(function() {
                        var trainee_id = $(this).find(".traineeAttendBtn").attr("data-trainee");
                        var course_id = $(this).find(".traineeAttendBtn").attr("data-course");
                        urlx = 'dashboard/courses/attendTrainee/'+course_id+'/'+trainee_id;
                        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        $.ajax({
                            url: urlx,
                            type: 'POST',	
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                            success: function(response) {
                                console.log(response)
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    text: 'لم يتم تسجيل الحضور.',
                                    icon: 'error',
                                    confirmButtonText: 'حسناً!'
                                });
                            }
                        });
                    });
                    Swal.fire({
                        text: 'تم تنفيذ العملية بنجاح!',
                        icon: 'success',
                        confirmButtonText: 'حسناً!'
                    }).then(function() {
                        $("#AddBtntrainees").show()
                        $("#multipleTraineeAttend").hide()
                        $("#multipleTraineeDelete").hide()
                        $(".selectAll[data-type='trainees']").prop("checked", false);
                        $(".rowCheckbox[data-type='trainees']").prop("checked", false);
                        $(".multipleDeleteBtn[data-type='trainees']").hide();
                    });
                }
            }); 
        } 
    });

    $("body").on("change", "#selectTrainer", function () {
        var trainer_id = $(this).val();
        var lecture_id = $(this).attr("data-lecture");
        var course_id = $(this).attr("data-course");
        urlx = 'dashboard/get-rates/'+course_id+'/'+lecture_id;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var deleteButton = this;
            $.ajax({
                url: urlx,
                type: 'POST',	 
                data: {
                    trainer: trainer_id,
                },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    console.log(response)    
                    $(".rate1"+lecture_id).val(response[1]);
                    $(".rate2"+lecture_id).val(response[2]);
                    $(".rate3"+lecture_id).val(response[3]);
                    $(".rate4"+lecture_id).val(response[4]);
                    $(".rate5"+lecture_id).val(response[5]);
                },
                error: function(xhr, status, error) {
                  
                }
            });
        }
    ); 
    $("body").on("change", "#selectTrainee", function () {
        var trainee_id = $(this).val();
        var course_id = $(this).attr("data-course");
        urlx = 'dashboard/get-activities/'+course_id;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var deleteButton = this;
            $.ajax({
                url: urlx,
                type: 'POST',	 
                data: {
                    trainee: trainee_id,
                },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    console.log(response)    
                },
                error: function(xhr, status, error) {
                  
                }
            });
        }
    );
    $("body").on("click", ".getContent", function () {
        var lecture_id = $(this).attr("data-lecture");
        var course_id = $(this).attr("data-course");
        urlx = 'dashboard/get-content/'+course_id+'/'+lecture_id;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var deleteButton = this;
            $.ajax({
                url: urlx,
                type: 'POST',	 
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    console.log(response)    
                    $(".rate6"+lecture_id).val(response[6]);
                    $(".rate7"+lecture_id).val(response[7]);
                    $(".rate8"+lecture_id).val(response[8]);
                    $(".rate9"+lecture_id).val(response[9]);
                    $(".rate10"+lecture_id).val(response[10]); 
                },
                error: function(xhr, status, error) {
                  
                }
            });
        }
    );
    $("body").on("click", ".getPlace", function () {
        var lecture_id = $(this).attr("data-lecture");
        var course_id = $(this).attr("data-course");
        urlx = 'dashboard/get-place/'+course_id+'/'+lecture_id;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var deleteButton = this;
            $.ajax({
                url: urlx,
                type: 'POST',	 
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    console.log(response)    
                    $(".rate11"+lecture_id).val(response[11]);
                    $(".rate12"+lecture_id).val(response[12]);
                    $(".rate13"+lecture_id).val(response[13]);
                    $(".rate14"+lecture_id).val(response[14]);
                },
                error: function(xhr, status, error) {
                  
                }
            });
        }
    ); 
    $("body").on("click", ".downloadFile", function () {
        var file = $(this).attr("data-name");
        urlx = 'dashboard/downloadFile/'+file;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var deleteButton = this;
            $.ajax({
                url: urlx,
                type: 'POST',	 
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if (response.file_url) {
                        window.open(response.file_url, '_blank');
                    } else {
                        console.error('File not found.');
                    }
                },
                error: function(xhr, status, error) {
                  
                }
            });
        }
    );

</script>  

@if(session()->has('trainer') && session('trainer') == true)
<script>
    $(document).ready(function() {
        var claimsTable = $('#teacher_pat');
        var customTable = $('.tab-content');
        $('html, body').animate({ scrollTop: customTable.offset().top }, 'slow');
        claimsTable.trigger("click");
    })
</script>
@endif
@if(session()->has('trainee') && session('trainee') == true)
<script>
    $(document).ready(function() {
        var claimsTable = $('#student_pat');
        var customTable = $('.tab-content');
        $('html, body').animate({ scrollTop: customTable.offset().top }, 'slow');
        claimsTable.trigger("click");
    })
</script>
@endif
@if(session()->has('course') && session('course') == true)
<script>
    $(document).ready(function() {
        var claimsTable = $('#lecture_pat');
        var customTable = $('.tab-content');
        $('html, body').animate({ scrollTop: customTable.offset().top }, 'slow');
        claimsTable.trigger("click");
    })
</script>
@endif
@if(session()->has('activity') && session('activity') == true)
<script>
    $(document).ready(function() {
        var claimsTable = $('#activity_pat');
        var customTable = $('.tab-content');
        $('html, body').animate({ scrollTop: customTable.offset().top }, 'slow');
        claimsTable.trigger("click");
    })
</script>
@endif
@if(session()->has('evaluate') && session('evaluate') == true)
<script>
    $(document).ready(function() {
        var claimsTable = $('#evaluate_pat');
        var customTable = $('.tab-content');
        $('html, body').animate({ scrollTop: customTable.offset().top }, 'slow');
        claimsTable.trigger("click");
    })
</script>
@endif



<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the input elements
        const lectureStartTime = document.getElementById("lectureStartTime");
        const lectureEndTime = document.getElementById("lectureEndTime");  
        const lectureStartTime1 = document.getElementById("lectureStartTime1");
        const lectureEndTime1 = document.getElementById("lectureEndTime1");

        // Add an event listener for input changes on both inputs
        [lectureStartTime, lectureEndTime,lectureStartTime1, lectureEndTime1].forEach(function (inputElement) {
            inputElement.addEventListener("input", function () {
                // Get the entered time
                const enteredTime = inputElement.value;

                // Split the time into hours and minutes
                const [hours, minutes] = enteredTime.split(":");

                // Check if hours and minutes are valid
                if (isNaN(hours) || isNaN(minutes) || hours < 0 || hours > 23 || minutes < 0 || minutes > 59 || minutes % 30 !== 0) {
                // If not valid, clear the input
                inputElement.value = "";
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        var currentPage = 1;
        var totalItems = {{ count($trainers) }};
        var itemsPerPage = parseInt($('#itemsPerPage').val());

        function updatePagination() {
            var startIndex = (currentPage - 1) * itemsPerPage;
            var endIndex = Math.min(startIndex + itemsPerPage, totalItems);

            var tableRows = $('#trainersTable tbody tr');
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


@endsection