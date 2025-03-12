@extends('admin.layouts.app')
@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">إضافة متدرب</h1>
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
                <li class="breadcrumb-item text-dark">إضافة متدرب</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<div class="mt-4 mb-8 post d-flex flex-column-fluid">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class=" card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-10">
                <!--begin::Heading-->
                <div class="mb-5 text-center">
                    <!--begin::Title-->
                    <h2 class="fw-bolder">إضافة متدرب</h2>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                 <!--begin::Form-->
                 <form method="POST" action="{{route('trainees.store')}}" class="form" enctype="multipart/form-data">
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
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('admin/media/avatars/blank.png')}})"></div>
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
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الاسم بالعربية" name="name_ar" />
                                        <span>@error('name_ar')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                        <!--end::Input-->  
                                    </div>  
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-4">الاسم الكامل بالإنجليزية</label>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الاسم بالإنجليزية" name="name_en" />
                                        <span>@error('name_en')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                        <!--end::Input-->  
                                    </div> 
                                </div>
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-2">الرقم الجامعي</label>
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الرقم الجامعي" name="university_id" />
                                        <span>@error('university_id')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-2">الوظيفة</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="أدخل الوظيفة" name="job" />
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
                                    <input type="date" class="form-control form-control-solid" placeholder="أدخل تاريخ الميلاد" name="dob" />
                                    <span>@error('dob')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">مكان الولادة</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل مكان الولادة" name="pob" />
                                    <span>@error('pob')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">فصيلة الدم</label>
                                    <select class="form-control form-control-solid" name="blood">
                                        <option value="">اختر فصيلة الدم</option>
                                            <option value="O">O</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>       
                                            <option value="A">A</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>                
                                            <option value="B">B</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>       
                                            <option value="AB">AB</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
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
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الهوية/جواز السفر" name="identity" />
                                    <span>@error('identity')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الحالة الاجتماعية</label>
                                    <select class="form-control form-control-solid" name="marital_status">
                                        <option value="">اختر الحالة الاجتماعية</option>
                                            <option value="أعزب">أعزب</option>
                                            <option value="متزوج">متزوج</option>
                                    </select>
                                    <span>@error('marital_status')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الوظيفة الحالية</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الوظيفة الحالية" name="current_job" />
                                    <span>@error('current_job')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">العنوان الوظيفي</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل العنوان الوظيفي" name="job_title" />
                                    <span>@error('job_title')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-bold mb-2">الحالة الوظيفية</label>
                                <select class="form-control form-control-solid" name="job_status" id="statusSelect">
                                    <option value="">اختر الحالة الوظيفية</option>
                                        <option value="حكومي">حكومي</option>
                                        <option value="خاص">خاص</option>
                                        <option value="مفرز">مفرز</option>
                                        <option value="متطوع">متطوع</option>
                                        <option value="طالب">طالب</option>
                                        <option value="أخرى">أخرى</option>
                                </select>
                                <span>@error('job_status')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div hidden class="col-md-4 fv-row" id="statusInput">
                                    <label class="fs-6 fw-bold mb-2">أخرى</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أخرى" name="job_status_more" />
                                    <span>@error('job_status_more')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div> 
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-3 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الحالة الصحية</label>
                                    <select class="form-control form-control-solid" name="health_status" id="healthSelect">
                                        <option value="">اختر الحالة الصحية</option>
                                            <option value="سليم">سليم</option>
                                            <option value="مريض">مريض</option>
                                            <option value="مصاب">مصاب</option>
                                    </select>
                                    <span>@error('health_status')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                <div hidden class="col-md-3 fv-row" id="diseaseInput">
                                    <label class="fs-6 fw-bold mb-2">نوع المرض</label>
                                    <select class="form-control form-control-solid" name="disease_type" id="diseaseSelect">
                                        <option value="">اختر نوع المرض</option>
                                            <option value="مزمن">مزمن</option>
                                            <option value="غير مزمن">غير مزمن</option>
                                            <option value="أخرى">أخرى</option>
                                    </select>
                                    <span>@error('disease_type')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>  
                                <div hidden class="col-md-3 fv-row" id="injuryInput">
                                    <label class="fs-6 fw-bold mb-2">نوع الاصابة</label>
                                    <select class="form-control form-control-solid" name="injury_type" id="injurySelect">
                                        <option value="">اختر نوع الاصابة</option>
                                            <option value="حركي">حركي</option>
                                            <option value="بصري">بصري</option>
                                            <option value="أخرى">أخرى</option>
                                    </select>
                                    <span>@error('injury_type')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Col-->
                                <div hidden class="col-md-3 fv-row" id="diseaseMore">
                                    <label class="fs-6 fw-bold mb-2">أخرى</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع المرض" name="disease_type_more" />
                                    <span>@error('disease_more')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div hidden class="col-md-3 fv-row" id="injuryMore">
                                    <label class="fs-6 fw-bold mb-2">أخرى</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الإصابة" name="injury_type_more" />
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
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المحافظة" name="state" />
                                    <span>@error('state')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">المدينة</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المدينة" name="city" />
                                    <span>@error('city')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">أقرب مكان</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل أقرب مكان" name="closest_place" />
                                    <span>@error('closest_place')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>    
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">أقرب جامعة</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل أقرب جامعة" name="closest_university" />
                                    <span>@error('closest_university')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الحي</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الحي" name="neighborhood" />
                                    <span>@error('neighborhood')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الشارع</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الشارع" name="street" />
                                    <span>@error('street')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div> 
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الهاتف</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الهاتف" name="phone" />
                                    <span>@error('phone')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الجوال</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الجوال" name="mobile1" />
                                    <span>@error('mobile1')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->  
                            </div>    
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">رقم الجوال الثاني</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الجوال الثاني" name="mobile2" />
                                    <span>@error('mobile2')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-bold mb-2">البريد الإلكتروني</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل البريد الإلكتروني" name="email" />
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
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل رقم الجلوس" name="seat_number" />
                                    <span>@error('seat_number')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">مكان الحصول عليها</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المكان" name="institution" />
                                    <span>@error('institution')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">سنة الحصول عليها</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل سنة الحصول عليها" name="year" />
                                    <span>@error('year')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>    
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">المعدل</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل المعدل" name="GPA" />
                                    <span>@error('GPA')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">نوع الثانوية</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الثانوية" name="certificate_type" />
                                    <span>@error('certificate_type')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-4 fv-row">
                                    <label class="fs-6 fw-bold mb-2">مجموع الدرجات</label>
                                    <input type="number" class="form-control form-control-solid" placeholder="أدخل مجموع الدرجات" name="grades" />
                                    <span>@error('grades')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                            </div>                        
                        </div>
                        <!--end::Content-->
                        <div id="pat_study" class="tab-pane fade">
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-3 fv-row">
                                    <label class="fs-6 fw-bold mb-2">نوع الشهادة</label>
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الشهادة" name="certificate[type][]" />
                                    <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-3 fv-row">
                                    <label class="fs-6 fw-bold mb-2">الجهة المانحة</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="أدخل الجهة المانحة" name="certificate[institution][]" />
                                    <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-2 fv-row">
                                    <label class="fs-6 fw-bold mb-2">سنة التخرج</label>
                                    <input type="number"  min="1900" max="2099" step="1" class="form-control form-control-solid" placeholder="أدخل سنة التخرج" name="certificate[year][]" />
                                    <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-2 fv-row">
                                    <label class="fs-6 fw-bold mb-2">المعدل</label>
                                    <input type="number" min="50" max="100" step="0.01" class="form-control form-control-solid" placeholder="أدخل المعدل" name="certificate[GPA][]" />
                                    <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
                                  <!--begin::Col-->
                                  <div class="col-md-2 fv-row">
                                    <label class="fs-6 fw-bold mb-2">التقدير العام</label>
                                    <select class="form-control form-control-solid" name="certificate[grades][]">
                                        <option value="">اختر التقدير العام</option>
                                            <option value="ممتاز">ممتاز</option>
                                            <option value="متزوج">جيد جدا</option>
                                            <option value="متزوج">جيد</option>
                                            <option value="متزوج">متوسط</option>
                                            <option value="متزوج">مقبول</option>
                                    </select>                                    
                                    <span>@error('certificate')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                </div>
                                <!--end::Col-->
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
                        <button type="submit" class="btn btn-primary">إضافة</button>
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
