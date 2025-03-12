<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityTrainee;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Rating;
use App\Models\Trainee;
use App\Models\Trainer;
class AdminController extends Controller
{
    public function index(){
        $trainers = Trainer::get();
        $trainees = Trainee::get();
        $courses = Course::get();
        return view('admin.index',['trainers'=>$trainers,'trainees'=>$trainees,'courses'=>$courses]);
    } 
     public function evaluateLecture(Request $request){
        $input = $request->input();
        if(!is_null($input['trainer'])){
            foreach($input['rate'] as $key=>$rate){
                $rating = Rating::where('course_id',$input['course'])->where('lecture_id',$input['lecture'])->where('trainer_id',$input['trainer'])->where('rate_id',$key)->first();
                if ($rate !== null) {
                    if(empty($rating)){
                        $new_rating = new Rating();
                        $new_rating->course_id = $input['course']; 
                        $new_rating->lecture_id = $input['lecture']; 
                        $new_rating->trainer_id = $input['trainer']; 
                        $new_rating->rate_id = $key; 
                        $new_rating->percentage = $rate; 
                        $new_rating->save();
                    }else{
                        $rating->percentage = $rate;
                        $rating->save();
                    }
                }else{
                    if(!empty($rating)){
                        $rating->delete(); 
                    }
                }   
            }
        }
        return redirect()->route('courses.show',$input['course'])->with('course', true)->with('success','تم التقييم بنجاح');
    }  
     public function evaluate(Request $request){
        $input = $request->input();  
            foreach($input['rate'] as $key=>$rate){
                $rating = Rating::where('course_id',$input['course'])->where('lecture_id',$input['lecture'])->where('trainer_id',Null)->where('rate_id',$key)->first();
                if ($rate !== null) {
                    if(empty($rating)){
                        $new_rating = new Rating();
                        $new_rating->course_id = $input['course']; 
                        $new_rating->lecture_id = $input['lecture']; 
                        $new_rating->rate_id = $key; 
                        $new_rating->percentage = $rate; 
                        $new_rating->save();
                    }else{
                        $rating->percentage = $rate;
                        $rating->save();
                    }
                }else{
                    if(!empty($rating)){
                        $rating->delete(); 
                    }
                }    
            }
            return redirect()->route('courses.show',$input['course'])->with('course', true)->with('success','تم التقييم بنجاح');

    }      
    public function getRates(Request $request,$course,$lecture){
        $input = $request->input();
        if(!is_null($input['trainer'])){
            $ratings = Rating::where('course_id',$course)->where('lecture_id',$lecture)->where('trainer_id',$input['trainer'])->wherebetween('rate_id',[1,5])->get();
            if($ratings){
                $values = array_combine($ratings->pluck('rate_id')->toArray(),$ratings->pluck('percentage')->toArray());  
            }
            return $values;
        }else{
            return $values = [];  
        }
     
        
    }  
    public function getContent(Request $request,$course,$lecture){
            $ratings = Rating::where('course_id',$course)->where('lecture_id',$lecture)->wherebetween('rate_id',[6,10])->get();
            if($ratings){
                $values = array_combine($ratings->pluck('rate_id')->toArray(),$ratings->pluck('percentage')->toArray());  
            }
            return $values;
    }  
    public function getPlace(Request $request,$course,$lecture){
            $ratings = Rating::where('course_id',$course)->where('lecture_id',$lecture)->wherebetween('rate_id',[11,14])->get();
            if($ratings){
                $values = array_combine($ratings->pluck('rate_id')->toArray(),$ratings->pluck('percentage')->toArray());  
            }
            return $values;
    }
    public function getCertificate(Request $request){
        $random_id = rand(1111,9999);
        ?>
        <div  class="mt-2 ms-0 row modal_div_<?php echo $random_id; ?>">
            <hr class="mt-4">
            <div class="col-md-2 fv-row">
                <label class="fs-6 fw-bold mb-2">نوع الشهادة</label>
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="أدخل نوع الشهادة" name="certificate[type][]" />
                <!--end::Input-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-3 fv-row">
                <label class="fs-6 fw-bold mb-2">الجهة المانحة</label>
                <input type="text" class="form-control form-control-solid" placeholder="أدخل الجهة المانحة" name="certificate[institution][]" />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-2 fv-row">
                <label class="fs-6 fw-bold mb-2">سنة التخرج</label>
                <input type="number"  min="1900" max="2099" step="1" class="form-control form-control-solid" placeholder="أدخل سنة التخرج" name="certificate[year][]" />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-2 fv-row">
                <label class="fs-6 fw-bold mb-2">المعدل</label>
                <input type="number" min="50" max="100" step="0.01" class="form-control form-control-solid" placeholder="أدخل المعدل" name="certificate[GPA][]" />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-2 fv-row">
                <label class="fs-6 fw-bold mb-2">التقدير العام</label>
                <select class="form-control form-control-solid" name="certificate[grades][]">
                <option value="">اختر التقدير العام</option>
                    <option value="ممتاز">ممتاز</option>
                    <option value="جيد جدا">جيد جدا</option>
                    <option value="جيد">جيد</option>
                    <option value="متوسط">متوسط</option>
                    <option value="مقبول">مقبول</option>
                </select>                                    
            </div>
            <div style="display: flex;align-items: end;" class="col-md-1 fv-row">	
                    <span onclick="delete_row(<?php echo $random_id; ?>)" class="delete_btn btn btn-danger">X</span>
            </div>
        </div>
        <?php
    }
    public function getActivity(Request $request,$course){
        $input = $request->input();
        if(!is_null($input['trainee'])){
            $trainee = Trainee::find($input['trainee']);
            $activities = $trainee->activities;
            return $activities;
            if(count($activities)){
            $activities = $activities->where('course_id',$course);
            if($activities){
                ?>
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
                                    <?php foreach ($activities->where('type','اختبار') as $key=>$activity)	?>		
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $activity->title ?></td>
                                            <td class="d-flex justify-content-center">  
                                                <select name="trainee" data-control="select1" data-placeholder="اختر المتدرب" data-hide-search="true" class="form-select form-select-sm w-80px fw-bolder">
                                                    <option <?php if($activity) ?>>تم</option>
                                                    <option>لم يتم</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input class="form-control w-80px form-control-sm"  type="text" name="" id="">
                                            </td>
                                        </tr>
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
                <?php
            }
            }
        }
    }  
    public function trash(){
        
    }
}
