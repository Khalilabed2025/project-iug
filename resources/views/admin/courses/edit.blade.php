@extends('admin.layouts.app')
@section('content')
<div class="post d-flex flex-column-fluid">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-10">
                <!--begin::Heading-->
                <div class="mb-5 text-center">
                    <!--begin::Title-->
                    <h2 class="fw-bolder">تعديل دورة تدريبية</h2>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                 <!--begin::Form-->
                 <form method="POST" action="{{route('courses.store')}}" class="form" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7">
                        <!--begin::Input group-->
                        <div class="row g-9 mb-7">
                            <div class="col-md-3 fv-row">
                                <!--begin::Label-->
                                <label class="d-block fw-bold fs-6 mb-5">صورة الدورة</label>
                                <!--end::Label-->
                                <!--begin::Image input-->
                                <div class="ms-2 image-input image-input-outline" data-kt-image-input="true" style="background-image: {{asset('admin/media/avatars/blank.png')}}">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: {{asset('admin/media/avatars/blank.png')}}"></div>
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
                            <div class="col-md-9 fv-row">
                                <label class="fs-6 fw-bold mb-2">وصف الدورة</label>
                                <textarea class="form-control form-control-solid" rows="5" placeholder="أدخل وصف الدورة" name="desc">{{$course->desc}}</textarea>
                                <span>@error('desc')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">الاسم الدورة</label>
                                <!--begin::Input-->
                                <input value="{{$course->title}}" type="text" class="form-control form-control-solid" placeholder="أدخل الاسم" name="title" />
                                <span>@error('title')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">المجال</label>
                                <input value="{{$course->field}}" type="text" class="form-control form-control-solid" placeholder="أدخل المجال" name="field" />
                                <span>@error('field')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                         <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                              <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-bold mb-2">أهداف الدورة</label>
                                <textarea id="editor1" class="form-control form-control-solid" placeholder="أدخل أهداف الدورة" name="objectives">{!!$course->objectives!!}</textarea>
                                <span>@error('objectives')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->  
                        <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                              <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-bold mb-2">محتوى الدورة</label>
                                <textarea id="editor2" class="form-control form-control-solid" placeholder="أدخل محتوى الدورة" name="content">{!!$course->content!!}</textarea>
                                <span>@error('content')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->   
                        <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                              <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-bold mb-2">الفئات المستهدفة</label>
                                <textarea id="editor3" class="form-control form-control-solid" placeholder="أدخل الفئات المستهدفة" name="destination">{!!$course->destination!!}</textarea>
                                <span>@error('destination')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->   
                        <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                              <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-bold mb-2">متطلبات الدورة</label>
                                <textarea id="editor4" class="form-control form-control-solid" placeholder="أدخل متطلبات الدورة" name="requirments">{!!$course->requirments!!}</textarea>
                                <span>@error('requirments')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->   
                        <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                              <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-bold mb-2">المراجع</label>
                                <textarea id="editor5" class="form-control form-control-solid" placeholder="أدخل مراجع الدورة" name="references">{!!$course->references!!}</textarea>
                                <span>@error('references')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                         <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-3 fv-row">
                                <label class="fs-6 fw-bold mb-2">تاريخ البدء</label>
                                <!--begin::Input-->
                                <input value="{{$course->start_date}}" type="date" class="form-control form-control-solid" placeholder="أدخل تاريخ البدء" name="start_date" />
                                <span>@error('start_date')<div class="text-danger">{{ $message }}</div>@enderror</span>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-3 fv-row">
                                <label class="fs-6 fw-bold mb-2">تاريخ الانتهاء</label>
                                <input value="{{$course->end_date}}" type="date" class="form-control form-control-solid" placeholder="أدخل الهاتف" name="end_date" />
                                <span>@error('end_date')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->     
                            <!--begin::Col-->
                            <div class="col-md-3 fv-row">
                                <label class="fs-6 fw-bold mb-2">عدد اللقاءات</label>
                                <input value="{{$course->lectures_number}}" type="number" min="1" class="form-control form-control-solid" placeholder="أدخل عدد اللقاءات" name="lectures_number" />
                                <span>@error('lectures_number')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Input-->
                            <!--begin::Col-->
                            <div class="col-md-3 fv-row">
                                <label class="fs-6 fw-bold mb-2">عدد الساعات</label>
                                <input value="{{$course->hours}}" type="number" min="1" class="form-control form-control-solid" placeholder="أدخل عدد الساعات" name="hours" />
                                <span>@error('hours')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">الفترة</label>
                                <select class="form-control form-control-solid" name="time">
                                    <option value="">اختر الفترة</option>
                                        <option @if($course->time == 'صباحية') selected @endif value="صباحية">صباحية</option>
                                        <option @if($course->time == 'مسائية') selected @endif value="مسائية">مسائية</option>
                                </select>
                                <span>@error('time')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                             <!--begin::Col-->
                             <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">المشرف</label>
                                <input value="{{$course->supervisor}}" type="text" class="form-control form-control-solid" placeholder="أدخل اسم المشرف" name="supervisor" />
                                <span>@error('supervisor')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group--> 
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">المدرب</label>
                                <select class="form-control form-control-solid" name="trainer">
                                    <option value="">اختر المدرب</option>
                                        @if(count($trainers))
                                            @foreach ($trainers as $trainer)
                                                <option @if($course->trainer_id == $trainer->id) selected @endif value="{{$trainer->id}}">{{$trainer->name}}</option>
                                            @endforeach
                                        @endif
                                </select>
                                <span>@error('trainer')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                             <!--begin::Col-->
                             <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">السعر</label>
                                <input value="{{$course->price}}" type="text" class="form-control form-control-solid" placeholder="أدخل سعر الدورة" name="price" />
                                <span>@error('price')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->    
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                             <!--begin::Col-->
                             <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">السعة</label>
                                <input value="{{$course->capacity}}" type="text" class="form-control form-control-solid" placeholder="أدخل سعة الدورة" name="capacity" />
                                <span>@error('capacity')<div class="text-danger">{{ $message }}</div>@enderror</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->       
                                    
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" fdprocessedid="5hio2m">
                            <a href="http://training.test/dashboard/courses">إلغاء</a>
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
    .create( document.querySelector( '#editor1' ), {
        language: 'ar', // Set language to Arabic
        ckfinder: {
            language: 'ar' // Set CKFinder language to Arabic (optional)
        },
        language: 'ar', // Set the editor's content language to Arabic
        direction: 'rtl' // Set direction to RTL (Right-to-Left) for Arabic support
    } )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#editor2' ), {
        language: 'ar', // Set language to Arabic
        ckfinder: {
            language: 'ar' // Set CKFinder language to Arabic (optional)
        },
        language: 'ar', // Set the editor's content language to Arabic
        direction: 'rtl' // Set direction to RTL (Right-to-Left) for Arabic support
    } )
    .catch( error => {
        console.error( error );
    } ); 
     ClassicEditor
    .create( document.querySelector( '#editor3' ), {
        language: 'ar', // Set language to Arabic
        ckfinder: {
            language: 'ar' // Set CKFinder language to Arabic (optional)
        },
        language: 'ar', // Set the editor's content language to Arabic
        direction: 'rtl' // Set direction to RTL (Right-to-Left) for Arabic support
    } )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#editor4' ), {
        language: 'ar', // Set language to Arabic
        ckfinder: {
            language: 'ar' // Set CKFinder language to Arabic (optional)
        },
        language: 'ar', // Set the editor's content language to Arabic
        direction: 'rtl' // Set direction to RTL (Right-to-Left) for Arabic support
    } )
    .catch( error => {
        console.error( error );
    } );   
    ClassicEditor
    .create( document.querySelector( '#editor5' ), {
        language: 'ar', // Set language to Arabic
        ckfinder: {
            language: 'ar' // Set CKFinder language to Arabic (optional)
        },
        language: 'ar', // Set the editor's content language to Arabic
        direction: 'rtl' // Set direction to RTL (Right-to-Left) for Arabic support
    } )
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
