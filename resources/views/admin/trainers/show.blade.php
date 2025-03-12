@extends('admin.layouts.app')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl mt-4">
        <!--begin::Navbar-->
        <?php
            $trimmedUrl = str_replace('www.', '', $trainer->getFirstMedia('trainers')->getUrl());
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
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$trainer->name}}</a>
                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#">
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
                                            <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{$trainer->specilization}}</a>
                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{$trainer->address}}</a>
                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{$trainer->email}}</a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                
                                
                                <!--begin::Menu-->
                                <div class="me-0">
                                    
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target name for future usage and reference" aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="file:///C:/Users/97059/Desktop/demo1/dist/#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-10 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="px-5 fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">@if($trainer_trainees){{count($trainer_trainees)}}@else 0 @endif</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">المتدربون</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-6 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="px-10 fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="80">@if($courses){{count($courses)}}@endif</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">الدورات التدريبية</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    
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
                            <a class="nav-link text-active-primary me-6 active" href="{{route('trainers.show',$trainer->id)}}#pat_overview" data-toggle="tab">ملخص</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="{{route('trainers.show',$trainer->id)}}#pat_courses" data-toggle="tab">الدورات التدريبية</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="{{route('trainers.show',$trainer->id)}}#pat_students" data-toggle="tab">المتدربون</a>
                        </li>
                        <!--end::Nav item-->
                    
                        <!--end::Nav item-->
                    </ul>
                </div>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Row-->
        <!-- content -->
        <!--end::Row-->
    </div>
    <!--end::Container-->
    <div class="tab-content mb-4">
        <!-- Overview Tab -->
        <div id="pat_overview" class="tab-pane fade show active">
            <div class="post d-flex flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{$trainer->name}}</h1>
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
                                 <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">المدربون</li>
                                <!--end::Item--> 
                                <!--end::Item-->  
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$trainer->name}}</li>
                                <!--end::Item-->
                                <!--end::Item-->   
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">ملخص</li>
                                <!--end::Item--> 
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Container-->
                <div  class="container-xxl">
                    <!--begin::About card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="row card-body p-lg-10">
                        <div class="col-lg-6">
                            <div class="mb-8">
                                <h4 class="fw-bolder">نبذة قصيرة</h4>
                                <p>{{$trainer->bio}}<p>
                            </div> 
                            <div class="mb-8">
                                <h4 class="fw-bolder mb-6">المؤهلات العلمية</h4>
                                <ul style="list-style-type:square">
                                    @foreach ($qualifications as $qualification) 
                                        <li>
                                            <div class="row mb-2">
                                                <div class="col-lg-7">
                                                <div class="mb-1 fw-normal f-grey">
                                                    {{$qualification->title}}
                                                </div>
                                                <p class="fw-normal f-grey">{{$qualification->institution}}</p>
                                                </div>
                                                <div class="col-lg-5">
                                                    <p class="fw-normal f-grey">{{$qualification->start_date}} - {{$qualification->end_date}}</p>
                                                </div>
                                            </div>  
                                        </li>
                                    @endforeach
                                </ul>
                            </div>    
                            <div class="mb-8">
                                <h4 class="fw-bolder mb-6">مجالات العمل</h4>
                                <p class="">{{$trainer->fields}}</p>
                            </div>    
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <h4 class="fw-bolder mb-6">الهوايات</h4>
                                <p class="">{{$trainer->hobbies}}</p>
                            </div>  
                            <div>
                                <h4 class="fw-bolder mb-6 mt-6">المهارات</h4>
                                <p class="">{{$trainer->skills}}</p>
                            </div> 
                            <div>
                                <h4 class="fw-bolder mb-6 mt-6">المشاريع والأبحاث</h4>
                                <p class="">{{$trainer->projects}}</p>
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
        <!-- Overview Tab -->
        <div id="pat_courses" class="tab-pane fade">
            <!--begin::Content-->
            <div class="post d-flex flex-column-fluid">
                <!--begin::Toolbar-->
                <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{$trainer->name}}</h1>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <span class="h-20px border-gray-200 border-start mx-4"></span>
                            <!--end::Separator-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">الرئيسية</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">المدربون</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$trainer->name}}</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">الدورات التدريبية</li>
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
                        <div class="card">
                            <div class="card-body p-lg-8">
                                <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap justify-content-between mb-6">
                                    <!--begin::Heading-->
                                    <h3 class="fw-bolder my-2">دوراتي التدريبية
                                    <span class="fs-6 text-gray-400 fw-bold ms-1"></span></h3>
                                    <!--end::Heading-->
                                    <!--begin::Actions-->
                                 
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                    @if($courses)
                                        @foreach ($courses as $course)
                                            <?php
                                            $trainees = $course->trainees;
                                            if($course->getFirstMedia('courses')){
                                            $trimmedUrl = str_replace('www.', '', $course->getFirstMedia('courses')->getUrl());
                                            }else{
                                            $trimmedUrl = '#';
                                            }
                                            ?>	
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-xl-4">
                                                <!--begin::Card-->
                                                <a href="{{route('courses.show',$course->id)}}" class="card border border-2 border-gray-300 border-hover">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0 pt-9">
                                                        <!--begin::Card Title-->
                                                        <div class="card-title m-0">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-50px w-50px bg-light">
                                                                <img src="{{$trimmedUrl}}" alt="image" class="p-3" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Car Title-->
                                                        <!--begin::Card toolbar-->
                                                        <div class="card-toolbar">
                                                            <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">{{$course->status}}</span>
                                                        </div>
                                                        <!--end::Card toolbar-->
                                                    </div>
                                                    <!--end:: Card header-->
                                                    <!--begin:: Card body-->
                                                    <div class="card-body p-6">
                                                        <!--begin::Name-->
                                                        <div class="fs-3 fw-bolder text-dark" >{{$course->title}}</div>
                                                        <!--end::Name-->
                                                        <!--begin::Description-->
                                                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7 w-250px h-20px overflow-hidden" title="{{$course->desc}}">{{$course->desc}}</p>
                                                        <!--end::Description-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex justify-content-around flex-wrap mb-3">
                                                            <!--begin::Due-->
                                                            <div class="border border-gray-300 border-dashed rounded min-w-100px py-3 px-4 me-1 mb-3">
                                                                <div class="fs-6 text-gray-800 fw-bolder">{{$course->start_date}}</div>
                                                                <div class="fw-bold text-gray-400">بداية الدورة</div>
                                                            </div>
                                                            <!--end::Due--> 
                                                            <!--begin::Due-->
                                                            <div class="border border-gray-300 border-dashed rounded min-w-100px py-3 px-4 mb-3">
                                                                <div class="fs-6 text-gray-800 fw-bolder">{{$course->end_date}}</div>
                                                                <div class="fw-bold text-gray-400">نهاية الدورة</div>
                                                            </div>
                                                            <!--end::Due-->
                                                        </div>
                                                        <!--begin::Budget-->
                                                        <div class="row min-w-125px py-1 px-4 ">
                                                            <div class="col-lg-6 fs-6 text-gray-800 fw-bolder">عدد الساعات</div>
                                                            <div class="col-lg-6 fw-bold text-gray-400 text-center">{{$course->hours}}</div>
                                                        </div>
                                                        <!--end::Budget-->     
                                                        <!--begin::Budget-->
                                                        <div class="row min-w-125px py-1 px-4 ">
                                                            <div class="col-lg-6 fs-6 text-gray-800 fw-bolder">عدد المتدربين</div>
                                                            <div class="col-lg-6 fw-bold text-gray-400 text-center">@if(count($trainees)){{count($trainees)}} @else 0 @endif/{{$course->capacity}}</div>
                                                        </div>
                                                        <!--end::Budget-->      
                                                        <!--end::Info-->
                                                        <!--begin::Progress-->
                                                        <?php
                                                        $percentage = (count($trainees)/$course->capacity)*100;
                                                        ?>
                                                        <div class="h-4px w-100 bg-light mt-5 mb-5" data-bs-toggle="tooltip" title="This Course Capacity {{$percentage}}% completed">
                                                            <div class="bg-info rounded h-4px" role="progressbar" style="width: {{$percentage}}%" aria-valuenow="{{count($trainees)}}" aria-valuemin="0" aria-valuemax="{{$course->capacity}}"></div>
                                                        </div>
                                                        <!--end::Progress-->
                                                    <!--begin::Users-->
                                                        <div class="symbol-group symbol-hover">
                                                            @if(count($trainees))
                                                                @foreach ($trainees as $trainee)  
                                                                    <?php
                                                                    if($trainee->getFirstMedia('trainees')){
                                                                    $trimmedUrl = str_replace('www.', '', $trainee->getFirstMedia('trainees')->getUrl());
                                                                    }else{
                                                                    $trimmedUrl = '#';
                                                                    }
                                                                    ?>
                                                                    <!--begin::User-->
                                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$trainee->name_ar}}">
                                                                        <img alt="Pic" src="{{$trimmedUrl}}" />
                                                                    </div>
                                                                    <!--begin::User-->
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                        <!--end::Users-->
                                                    
                                                    </div>
                                                    <!--end:: Card body-->
                                                </a>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Col-->
                                        @endforeach
                                    @endif
                            

                                </div>
                                <!--end::Row-->
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
        </div>
        <!-- Overview Tab -->
        <!-- Overview Tab -->
        <div id="pat_students" class="tab-pane fade">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid">
                 <!--begin::Toolbar-->
                 <div class="toolbar">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{$trainer->name}}</h1>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <span class="h-20px border-gray-200 border-start mx-4"></span>
                            <!--end::Separator-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">الرئيسية</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">المدربون</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">{{$trainer->name}}</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">المتدربون</li>
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
                                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="البحث عن متدرب" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                            
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="kt_table_users">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-100px">المتدرب</th>
                                            <th class="min-w-90px">رقم المتدرب</th>
                                            <th class="min-w-90px">العنوان</th>
                                            <th class="min-w-90px">رقم الهاتف</th>
                                            <th class="min-w-90px">تاريخ الانضمام</th>
                                            <th class="min-w-100px">إجراءات</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @if(count($trainer_trainees))
                                            @foreach($trainer_trainees as $trainee)	
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
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="{{route('trainees.show',$trainee->id)}}">
                                                                <div class="symbol-label">
                                                                    <img src="{{$trimmedUrl}}" alt="Emma Smith" class="w-100" />
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
                                                    <td>{{$trainee->address}}</td>
                                                    <!--end::Last login=-->
                                                    <!--begin::Two step=-->
                                                    <td>{{$trainee->phone}}</td>
                                                    <!--end::Two step=-->
                                                    <!--begin::Joined-->
                                                    <td>{{$formattedDate}}</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td class="text-end">
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
                                                                <a type="button" class="menu-link px-3" id="deleteButton" data-id="{{$trainee->id}}">حذف</a>
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
        </div>
        <!-- Overview Tab -->
    </div>
@section('scripts')
<script>
    $(document).ready(function () {
        $('.nav-link').click(function () {
            $(this).tab('show');
        });
    });
</script>  


@endsection

@endsection