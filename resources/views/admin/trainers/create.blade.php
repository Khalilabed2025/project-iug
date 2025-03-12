@extends('admin.layouts.app')
@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">إضافة مدرب</h1>
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
                <li class="breadcrumb-item text-muted">إدارة المستخدمين</li>
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
                <li class="breadcrumb-item text-muted"><a class="text-dark" href="{{route('trainers.index')}}">المدربون</a></li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-dark">إضافة مدرب</li>
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
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-10">
                <!--begin::Heading-->
                <div class="mb-5 text-center">
                    <!--begin::Title-->
                    <h2 class="fw-bolder">إضافة مدرب</h2>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                 <!--begin::Form-->
                 <form method="POST" action="{{route('trainers.store')}}" class="form" enctype="multipart/form-data">
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
                            <div class="col-md-10 fv-row ps-8">
                                <label class="fs-6 fw-bold mb-4">نبذة</label>
                                <textarea class="form-control form-control-solid" rows="5" placeholder="أدخل النبذة" name="bio"></textarea>
                                <span>@error('bio')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">الاسم الكامل</label>
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل الاسم" name="name" />
                                <span>@error('name')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">التخصص</label>
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل التخصص" name="specilization" />
                                <span>@error('specilization')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">البريد الإلكتروني</label>
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل البريد الإلكتروني" name="email" />
                                <span>@error('email')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">الهاتف</label>
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل الهاتف" name="phone" />
                                <span>@error('phone')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                               <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">العنوان</label>
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل العنوان" name="address"/>
                                <span>@error('address')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">المجالات</label>
                                <small class="form-text">مثال: "المجال 1، المجال 2، المجال 3"</small>
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل المجالات" name="fields" />
                                <span>@error('fields')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                 <label class="fs-6 fw-bold mb-2">المهارات</label>
                                <small class="form-text">مثال: "المهارة 1، المهارة 2، المهارة 3"</small>
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل المهارات" name="skills" />
                                <span>@error('skills')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            <!--end::Input-->
                            </div>
                             <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">الهوايات</label>
                                <small class="form-text">مثال: "هواية 1، هواية 2، هواية 3"</small>
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل الهوايات" name="hobbies" />
                                <span>@error('hobbies')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                  
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                              <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-bold mb-2">المشاريع والأبحاث</label>
                                <small class="form-text">مثال: "مشروع 1، مشروع 2، بحث 1"</small>
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل المشاريع والأبحاث" name="projects" />
                                <span>@error('projects')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <label class="fs-6 fw-bold mb-2">المؤهلات العلمية</label>
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-2 fv-row">
                                <label class="fs-6 fw-bold mb-2">تاريخ البداية</label>
                                <input type="number" class="form-control form-control-solid" placeholder="سنة البداية" name="qualification[from][]" min="1000" max="9999"/>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-2 fv-row">
                                <label class="fs-6 fw-bold mb-2">تاريخ النهاية</label>
                                <!--begin::Input-->
                                <input type="number" class="form-control form-control-solid" placeholder="سنة النهاية" name="qualification[to][]" min="1000" max="9999"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col--> 
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-bold mb-2">الدرجة</label>
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل الدرجة" name="qualification[title][]"/>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-bold mb-2">المؤسسة التعليمية</label>
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="أدخل المؤسسة التعليمية" name="qualification[institution][]"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div id="models" class="row g-9 mb-8">     
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">    
                            <button  class="btn btn-light me-3" id="new_qualification" data-url="{{url('dashboard/getQualification')}}">إضافة مؤهل أخر</button>
                        </div>
                        
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3">
                            <a href="{{route('trainers.index')}}">إلغاء</a>
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
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        
        $("body").on("click", "#new_qualification", function () {
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
</script> 

@endsection
