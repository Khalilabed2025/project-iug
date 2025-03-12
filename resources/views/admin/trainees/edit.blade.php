@extends('admin.layouts.app')
@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">تعديل متدرب</h1>
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
                <li class="breadcrumb-item text-muted">ادارة المستخدمين</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">المستخدمون</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted"><a class="text-dark" href="{{route('trainees.index')}}">المتدربون</a></li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-dark">تعديل متدرب</li>
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
                <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->التصفية</a>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484c5528c3d">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">خيارات التصفية</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">الحالة:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61484c5528c3d" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->

<div class="mt-4 mb-8 post d-flex flex-column-fluid">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-10">
                <!--begin::Heading-->
                <div class="mb-5 text-center">
                    <!--begin::Title-->
                    <h2 class="fw-bolder">تعديل متدرب</h2>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <?php
                if($trainee->getFirstMedia('trainees')){
                $trimmedUrl = str_replace('www.', '', $trainee->getFirstMedia('trainees')->getUrl());
                }else{
                $trimmedUrl	='#';
                }
                $fullUrl = url('/') . '/' . $trimmedUrl;
                ?>
                <!--begin::Form-->
                <form method="POST" action="{{route('trainees.update',$trainee->id)}}" class="form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7">
                        <!--begin::Input group-->
                        <div class="row g-9 mb-7">
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class="d-block fw-bold fs-6 mb-5">الصورة الشخصية</label>
                                <!--end::Label-->
                                <!--begin::Image input-->
                                <div class="ms-2 image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{asset('admin/media/avatars/blank.png')}})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{$trimmedUrl}})"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">تقبل ملفات: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                                <!--begin::Col-->
                            </div>
                            
                            <div class="col-md-10 ps-8 fv-row">
                                <div class="row g-9 mb-8">
                                    <div class="col-md-6 fv-row  mb-4 ">
                                        <label class="required fs-6 fw-bold mb-4">الاسم الكامل بالعربية</label>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الاسم بالعربية" name="name_ar" value="{{$trainee->name_ar}}" />
                                        <span>@error('name_ar')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                        <!--end::Input-->  
                                    </div>  
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-4">الاسم الكامل بالإنجليزية</label>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الاسم بالإنجليزية" name="name_en" value="{{$trainee->name_en}}" />
                                        <span>@error('name_en')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                        <!--end::Input-->  
                                    </div> 
                                </div>
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-2">الرقم الجامعي</label>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الرقم الجامعي" name="university_id" value="{{$trainee->university_id}}"/>
                                        <span>@error('university_id')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-2">الوظيفة</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الوظيفة" name="job" value="{{$trainee->job}}"/>
                                        <span>@error('job')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                

                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Navs-->
                        <div class="d-flex overflow-auto h-55px">
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                                <!--begin::Nav item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary me-6 active" href="{{route('trainees.create')}}#pat_personal" data-toggle="tab">البيانات الشخصية</a>
                                </li>
                                <!--end::Nav item-->   
                                <!--begin::Nav item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary me-6" href="{{route('trainees.create')}}#pat_address" data-toggle="tab">العنوان</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary me-6" href="{{route('trainees.create')}}#pat_secondary" data-toggle="tab">بيانات الثانوية العامة</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary me-6" href="{{route('trainees.create')}}#pat_study" data-toggle="tab">المؤهلات العلمية</a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                        </div>
                        <!--begin::Navs-->                   
                    </div>
                    <!--end::Scroll-->
                    <div class="tab-content mt-6">
                        <!-- Overview Tab -->
                        <div id="pat_personal" class="tab-pane fade show active">
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">تاريخ الميلاد</label>
                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" placeholder="أدخل تاريخ الميلاد" name="dob" value="{{$trainee->DOB}}"/>
                                    <span>@error('dob')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">مكان الولادة</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل مكان الولادة" name="pob" value="{{$trainee->POB}}" />
                                    <span>@error('pob')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">فصيلة الدم</label>
                                    <select class="form-control form-control-solid" name="blood" >
                                        <option value="">اختر فصيلة الدم</option>
                                        <option value="O" @if($trainee->blood === 'O') selected @endif>O</option>
                                        <option value="O+" @if($trainee->blood === 'O+') selected @endif>O+</option>
                                        <option value="O-" @if($trainee->blood === 'O-') selected @endif>O-</option>
                                        <option value="A" @if($trainee->blood === 'A') selected @endif>A</option>
                                        <option value="A+" @if($trainee->blood === 'A+') selected @endif>A+</option>
                                        <option value="A-" @if($trainee->blood === 'A-') selected @endif>A-</option>
                                        <option value="B" @if($trainee->blood === 'B') selected @endif>B</option>
                                        <option value="B+" @if($trainee->blood === 'B+') selected @endif>B+</option>
                                        <option value="B-" @if($trainee->blood === 'B-') selected @endif>B-</option>
                                        <option value="AB" @if($trainee->blood === 'AB') selected @endif>AB</option>
                                        <option value="AB+" @if($trainee->blood === 'AB+') selected @endif>AB+</option>
                                        <option value="AB-" @if($trainee->blood === 'AB-') selected @endif>AB-</option>
                                    </select>                                
                                    <span>@error('blood')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الهوية/جواز السفر</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الهوية/جواز السفر" name="identity" value="{{$trainee->identity}}"/>
                                    <span>@error('identity')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الحالة الاجتماعية</label>
                                    <select class="form-control form-control-solid" name="marital_status">
                                        <option value="">اختر الحالة الاجتماعية</option>
                                            <option value="أعزب" @if($trainee->marital_status === 'أعزب') selected @endif>أعزب</option>
                                            <option value="متزوج" @if($trainee->marital_status === 'متزوج') selected @endif>متزوج</option>
                                    </select>
                                    <span>@error('marital_status')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الوظيفة الحالية</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الوظيفة الحالية" name="current_job" value="{{$trainee->current_job}}"/>
                                    <span>@error('current_job')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">العنوان الوظيفي</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل العنوان الوظيفي" name="job_title" value="{{$trainee->job_title}}"/>
                                    <span>@error('job_title')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-bold mb-2">الحالة الوظيفية</label>
                                <select class="form-control form-control-solid" name="job_status" id="statusSelect">
                                    <option value="">اختر الحالة الوظيفية</option>
                                        <option @if($trainee->job_status === 'حكومي') selected @endif value="حكومي">حكومي</option>
                                        <option @if($trainee->job_status === 'خاص') selected @endif value="خاص">خاص</option>
                                        <option @if($trainee->job_status === 'مفرز') selected @endif value="مفرز">مفرز</option>
                                        <option @if($trainee->job_status === 'متطوع') selected @endif value="متطوع">متطوع</option>
                                        <option @if($trainee->job_status === 'طالب') selected @endif value="طالب">طالب</option>
                                        <option @if($trainee->job_status !== 'حكومي' and $trainee->job_status !== 'خاص' and $trainee->job_status !== 'مفرز' and $trainee->job_status !== 'متطوع' and $trainee->job_status !== 'طالب') selected @endif value="أخرى">أخرى</option>
                                </select>
                                <span>@error('job_status')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <div hidden class="col-md-4 fv-row" id="statusInput">
                                    <label class="fs-6 fw-bold mb-2">أخرى</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أخرى" name="job_status_more" value="{{$trainee->job_status}}"/>
                                    <span>@error('job_status_more')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                            </div> 
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-3 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الحالة الصحية</label>
                                    <select class="form-control form-control-solid" name="health_status" id="healthSelect">
                                        <option value="">اختر الحالة الصحية</option>
                                            <option @if($trainee->health_status === 'سليم') selected @endif value="سليم">سليم</option>
                                            <option @if($trainee->health_status === 'مريض') selected @endif value="مريض">مريض</option>
                                            <option @if($trainee->health_status === 'مصاب') selected @endif value="مصاب">مصاب</option>
                                    </select>
                                    <span>@error('health_status')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                <div hidden class="col-md-3 fv-row" id="diseaseInput">
                                    <label class="fs-6 fw-bold mb-2">نوع المرض</label>
                                    <select class="form-control form-control-solid" name="disease_type" id="diseaseSelect">
                                        <option value="">اختر نوع المرض</option>
                                        <option  @if($trainee->disease_type === 'مزمن') selected @endif value="مزمن">مزمن</option>
                                        <option  @if($trainee->disease_type === 'غير مزمن') selected @endif value="غير مزمن">غير مزمن</option>
                                        <option  @if($trainee->disease_type !== 'مزمن' and $trainee->disease_type !== 'غير مزمن') seleted @endif value="أخرى">أخرى</option>
                                    </select>
                                    <span>@error('disease_type')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>  
                                <div hidden class="col-md-3 fv-row" id="injuryInput">
                                    <label class="fs-6 fw-bold mb-2">نوع الاصابة</label>
                                    <select class="form-control form-control-solid" name="injury_type" id="injurySelect">
                                        <option value="">اختر نوع الاصابة</option>
                                        <option  @if($trainee->injury_type === 'حركي') selected @endif value="حركي">حركي</option>
                                        <option  @if($trainee->injury_type === 'بصري') selected @endif value="بصري">بصري</option>
                                        <option @if($trainee->injury_type !== 'حركي' and $trainee->injury_type !== 'بصري') selected @endif value="أخرى">أخرى</option>
                                    </select>
                                    <span>@error('injury_type')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Col-->
                                <div hidden class="col-md-3 fv-row" id="diseaseMore">
                                    <label class="fs-6 fw-bold mb-2">أخرى</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع المرض" name="disease_type_more" value="{{$trainee->disease_type}}" />
                                    <span>@error('disease_more')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div hidden class="col-md-3 fv-row" id="injuryMore">
                                    <label class="fs-6 fw-bold mb-2">أخرى</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الإصابة" name="injury_type_more" value="{{$trainee->injury_type}}" />
                                    <span>@error('injury_more')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>   
                        </div>
                        <!--end::Content-->
                        <!-- Overview Tab -->
                        <div id="pat_address" class="tab-pane fade">
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">المحافظة</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المحافظة" name="state" value="{{$trainee->state}}" />
                                    <span>@error('state')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">المدينة</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المدينة" name="city" value="{{$trainee->city}}" />
                                    <span>@error('city')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">أقرب مكان</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل أقرب مكان" name="closest_place" value="{{$trainee->closest_place}}"/>
                                    <span>@error('closest_place')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>    
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">أقرب جامعة</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل أقرب جامعة" name="closest_university" value="{{$trainee->closest_university}}" />
                                    <span>@error('closest_university')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الحي</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الحي" name="neighborhood" value="{{$trainee->neighborhood}}"/>
                                    <span>@error('neighborhood')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الشارع</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الشارع" name="street" value="{{$trainee->street}}"/>
                                    <span>@error('street')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div> 
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الهاتف</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الهاتف" name="phone" value="{{$trainee->phone}}"/>
                                    <span>@error('phone')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الجوال</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الجوال" name="mobile1" value="{{$trainee->mobile1}}"/>
                                    <span>@error('mobile1')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->  
                            </div>    
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الجوال الثاني</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الجوال الثاني" name="mobile2" value="{{$trainee->mobile2}}"/>
                                    <span>@error('mobile2')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">البريد الإلكتروني</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل البريد الإلكتروني" name="email" value="{{$trainee->email}}" />
                                    <span>@error('email')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div> 
                        </div>
                        <!--end::Content-->
                        <div id="pat_secondary" class="tab-pane fade">
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الجلوس</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الجلوس" name="seat_number" value="{{$trainee->seatnumber}}"/>
                                    <span>@error('seat_number')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">مكان الحصول عليها</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المكان" name="institution" value="{{$trainee->institution}}" />
                                    <span>@error('institution')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">سنة الحصول عليها</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل سنة الحصول عليها" name="year" value="{{$trainee->year}}" />
                                    <span>@error('year')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>    
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">المعدل</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المعدل" name="GPA" value="{{$trainee->GPA}}" />
                                    <span>@error('GPA')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">نوع الثانوية</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الثانوية" name="certificate_type" value="{{$trainee->certificate_type}}"/>
                                    <span>@error('certificate_type')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">مجموع الدرجات</label>
                                    <input type="number" class="form-control form-control-solid" placeholder="أدخل مجموع الدرجات" name="grades" value="{{$trainee->grades}}" />
                                    <span>@error('grades')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>                        
                        </div>
                        <!--end::Content-->
                        <div id="pat_study" class="tab-pane fade">
                            <div class="row g-9 mb-8 mt-2">
                                @if(count($certificates))
                                    @foreach ($certificates as $certificate)
                                        <?php
                                            $random_id = rand(1111,9999);
                                        ?>
                                        <div  class="mt-2 ms-0 row modal_div_{{$random_id}}">
                                            <!--begin::Col-->
                                            <div class="col-md-2 fv-row">
                                                <label class="fs-6 fw-bold mb-2">نوع الشهادة</label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الشهادة" name="certificate[type][]" value="{{$certificate->type}}" title="{{$certificate->type}}"/>
                                                <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-3 fv-row">
                                                <label class="fs-6 fw-bold mb-2">الجهة المانحة</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="أدخل الجهة المانحة" name="certificate[institution][]" value="{{$certificate->institution}}"/>
                                                <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                            </div>
                                            <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-2 fv-row">
                                                <label class="fs-6 fw-bold mb-2">سنة التخرج</label>
                                                <input type="number"  min="1900" max="2099" step="1" class="form-control form-control-solid" placeholder="أدخل سنة التخرج" name="certificate[year][]" value="{{$certificate->year}}"/>
                                                <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                            </div>
                                            <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-2 fv-row">
                                                <label class="fs-6 fw-bold mb-2">المعدل</label>
                                                <input type="number" min="50" max="100" step="0.01" class="form-control form-control-solid" placeholder="أدخل المعدل" name="certificate[GPA][]" value="{{$certificate->GPA}}"/>
                                                <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                            </div>
                                            <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-2 fv-row">
                                                <label class="fs-6 fw-bold mb-2">التقدير العام</label>
                                                <select class="form-control form-control-solid" name="certificate[grades][]">
                                                    <option value="">اختر التقدير العام</option>
                                                        <option  @if($certificate->grades === 'ممتاز') selected @endif value="ممتاز">ممتاز</option>
                                                        <option  @if($certificate->grades === 'جيد جدا') selected @endif value="جيد جدا">جيد جدا</option>
                                                        <option  @if($certificate->grades === 'جيد') selected @endif value="جيد">جيد</option>
                                                        <option  @if($certificate->grades === 'متوسط') selected @endif value="v">متوسط</option>
                                                        <option  @if($certificate->grades === 'مقبول') selected @endif value="مقبول">مقبول</option>
                                                </select>                                    
                                                <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                            </div>
                                            <!--end::Col-->
                                            <div style="display: flex;align-items: end;" class="col-md-1 fv-row">	
                                                <span onclick="delete_row({{$random_id}})" class="delete_btn btn btn-danger">X</span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div> 
                            <div id="models" class="row g-9 mb-8">     
                            </div>
                            <!--end::Input group-->
                            <div class="row g-9 mb-8">    
                                <button  class="btn btn-light me-3" id="new_certificate" data-url="{{url('dashboard/get-certificate')}}">إضافة شهادة جديدة</button>
                            </div>
                        </div>
                    </div>
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3">
                            <a href="{{route('trainees.index')}}">إلغاء</a>
                        </button>
                        <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>

@endsection
@section('scripts')
<script>
    $("body").on("click", "#new_certificate", function () {
        var urlx = $(this).attr("data-url");
        var pro_model = Math.floor(Math.random() * 10000);

        $.ajax({
            type: "GET",
            data: {
                pro_model: pro_model,
            },
            url: urlx,
            success: function (data) {
                $("#models").append(data);
            },
        });
        return false;
    });  
    
    function delete_row(id){
		$(".modal_div_"+id).remove();
	}
    $(document).ready(function() {
        $("#healthSelect").change(function(){
            var val = $(this).val();
            if (val === "مريض") {
                $("#diseaseInput").prop("hidden", false);
                $("#injuryInput").prop("hidden", true);
                $("#injuryMore").prop("hidden", true);
            }else if(val === "مصاب"){
                $("#injuryInput").prop("hidden", false);
                $("#diseaseInput").prop("hidden", true);
                $("#diseaseMore").prop("hidden", true);
            }else{
                $("#diseaseInput").prop("hidden", true);
                $("#injuryInput").prop("hidden", true);
                $("#injuryMore").prop("hidden", true);
                $("#diseaseMore").prop("hidden", true);
            }
        });
    }); 
    $(document).ready(function() {
        var val = $("#healthSelect").val();
        if (val === "مريض") {
            $("#diseaseInput").prop("hidden", false);
            $("#injuryInput").prop("hidden", true);
        }else if(val === "مصاب"){
            $("#injuryInput").prop("hidden", false);
            $("#diseaseInput").prop("hidden", true);
        }else{
            $("#diseaseInput").prop("hidden", true);
            $("#injuryInput").prop("hidden", true);
        }
    });
    $(document).ready(function() {
        $("#diseaseSelect").change(function(){
            var val = $(this).val();
            if (val === "أخرى") {
                $("#diseaseMore").prop("hidden", false);
                $("#injuryMore").prop("hidden", true);
            }else{
                $("#diseaseMore").prop("hidden", true);
                $("#injuryMore").prop("hidden", true);
            }
        });
    }); 
    $(document).ready(function() {
        var val = $("#diseaseSelect").val();
        if (val === "أخرى") {
            $("#diseaseMore").prop("hidden", false);
            $("#injuryMore").prop("hidden", true);
        }else{
            $("#diseaseMore").prop("hidden", true);
            $("#injuryMore").prop("hidden", true);
        }
    });
    $(document).ready(function() {
        $("#injurySelect").change(function(){
            var val = $(this).val();
            if (val === "أخرى") {
                $("#diseaseMore").prop("hidden", true);
                $("#injuryMore").prop("hidden", false);
            }else{
                $("#diseaseMore").prop("hidden", true);
                $("#injuryMore").prop("hidden", true);
            }
        });
    }); 
    $(document).ready(function() {
        var val = $("#injurySelect").val();
        if (val === "أخرى") {
            $("#diseaseMore").prop("hidden", true);
            $("#injuryMore").prop("hidden", false);
        }else{
            $("#diseaseMore").prop("hidden", true);
            $("#injuryMore").prop("hidden", true);
        }
    });
    $(document).ready(function () {
        $('.nav-link').click(function () {
            $(this).tab('show');
        });
    });
    $(document).ready(function() {
        $("#statusSelect").change(function(){
            var val = $(this).val();
            if (val === "أخرى") {
                $("#statusInput").prop("hidden", false);
            }else{
                $("#statusInput").prop("hidden", true);
            }
        });
    }); 
    $(document).ready(function() {
        var val = $("#statusSelect").val();
        if (val === "أخرى") {
            $("#statusInput").prop("hidden", false);
        }else{
            $("#statusInput").prop("hidden", true);
        }
    });
</script>
@endsection

