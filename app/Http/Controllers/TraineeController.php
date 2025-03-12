<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\CourseTrainer;
use App\Models\Trainee;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Validator;
use PhpOffice\PhpWord\TemplateProcessor;


class TraineeController extends Controller
{
    public function index()
    {
        $trainees = Trainee::get();
        return view('admin.trainees.index',['trainees'=>$trainees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trainees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $validator = Validator::make($input, [
            'name_ar' => 'required|string',
            'name_en' => 'nullable|string',
            'name_en' => 'nullable|string',
            'email' => 'nullable|email',
            'grades' => 'nullable|numeric',
            'GPA' => 'nullable|numeric',
            'seat_number' => 'nullable|numeric',
            'year' => 'nullable|numeric',
            'university_id' => 'nullable|numeric|min:8',
            'trainee_id' => 'nullable|numeric|min:6',
            'address' => 'nullable|string',
            'phone' => 'nullable|numeric|min:7',
            'mobile2' => 'nullable|numeric|min:10',
            'mobile2' => 'nullable|numeric|min:10',
            'identity' => 'nullable|numeric|min:9',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $trainee = new Trainee();
        $trainee->name_ar = $input['name_ar'];
        $trainee->name_en = $input['name_en'];
        $trainee->university_id = $input['university_id'];
        $trainee->job = $input['job'];
        $trainee->DOB = $input['dob'];
        $trainee->POB = $input['pob'];
        $trainee->blood = $input['blood'];
        $trainee->identity = $input['identity'];
        $trainee->marital_status = $input['marital_status'];
        $trainee->current_job = $input['current_job'];
        $trainee->job_title = $input['job_title'];
        if($input['job_status']){
            if($input['job_status'] !== 'أخرى'){
                $trainee->job_status = $input['job_status'];
            }else{
                $trainee->job_status = $input['job_status_more'];
            }   
        } 
        $trainee->health_status = $input['health_status'];
        if($input['health_status'] == 'مريض'){
            if($input['disease_type'] !== 'أخرى'){
                $trainee->disease_type = $input['disease_type'];
            }else{
                $trainee->disease_type = $input['disease_type_more'];
            }
        }elseif($input['health_status'] == 'مصاب'){
            if($input['injury_type'] !== 'أخرى'){
                $trainee->injury_type = $input['injury_type'];
            }else{
                $trainee->injury_type = $input['injury_type_more'];

            }
        }
        $trainee->state = $input['state'];
        $trainee->city = $input['city'];
        $trainee->closest_place = $input['closest_place'];
        $trainee->closest_university = $input['closest_university'];
        $trainee->neighborhood = $input['neighborhood'];
        $trainee->street = $input['street'];
        $trainee->phone = $input['phone'];
        $trainee->mobile1 = $input['mobile1'];
        $trainee->mobile2 = $input['mobile2'];
        $trainee->email = $input['email'];
        $trainee->seat_number = $input['seat_number'];
        $trainee->institution = $input['institution'];
        $trainee->year = $input['year'];
        $trainee->GPA = $input['GPA'];
        $trainee->certificate_type = $input['certificate_type'];
        $trainee->grades = $input['grades'];
        $trainee->save();
        $trainee_certificates = $request->certificate;
        if(is_array($trainee_certificates)){
            for ($i=0; $i<count($trainee_certificates['type']);$i++){
                if(empty($trainee_certificates['type'][$i]) || empty($trainee_certificates['institution'][$i]) || empty($trainee_certificates['year'][$i]) || empty($trainee_certificates['GPA'][$i]) || empty($trainee_certificates['grades'][$i])) continue;
                $new_certificate = new Certificate();

                $new_certificate->trainee_id = $trainee->id;
                $new_certificate->type = $trainee_certificates['type'][$i];
                $new_certificate->institution = $trainee_certificates['institution'][$i];
                $new_certificate->year = $trainee_certificates['year'][$i];
                $new_certificate->GPA = $trainee_certificates['GPA'][$i];
                $new_certificate->grades = $trainee_certificates['grades'][$i];
                $new_certificate->save();            
            } 

        } 

        if($input['avatar_remove']==1){
            $trainee->clearMediaCollection('trainees');
        }

        if ($request->hasFile('avatar')) {
            $trainee->addMediaFromRequest('avatar')->preservingOriginal()->toMediaCollection('trainees');
        }
        else{
            $trainee->addMediaFromUrl(asset('admin\media\avatars\blank.png'))->preservingOriginal()->toMediaCollection('trainees');
        }
        $trainee->save();     
        return redirect()->route('trainees.index')->with('success', 'تم اضافة متدرب بنجاح');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainee = Trainee::find($id);
        $courses = $trainee->courses;
        $trainee_trainers = $trainee->trainers;

        return view('admin.trainees.show',['trainee'=>$trainee,'courses'=>$courses,'trainee_trainers'=>$trainee_trainers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainee = Trainee::find($id);
        $certificates = $trainee->certificates;
        return view('admin.trainees.edit',['trainee'=>$trainee,'certificates'=>$certificates,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->input();
        dd($input);
        $validator = Validator::make($input, [
            'name_ar' => 'required|string',
            'name_en' => 'nullable|string',
            'name_en' => 'nullable|string',
            'email' => 'nullable|email',
            'grades' => 'nullable|numeric',
            'GPA' => 'nullable|numeric',
            'seat_number' => 'nullable|numeric',
            'year' => 'nullable|numeric',
            'university_id' => 'nullable|numeric|min:8',
            'trainee_id' => 'nullable|numeric|min:6',
            'address' => 'nullable|string',
            'phone' => 'nullable|numeric|min:7',
            'mobile2' => 'nullable|numeric|min:10',
            'mobile2' => 'nullable|numeric|min:10',
            'identity' => 'nullable|numeric|min:9',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $trainee = Trainee::find($id);
        $trainee->name_ar = $input['name_ar'];
        $trainee->name_en = $input['name_en'];
        $trainee->university_id = $input['university_id'];
        $trainee->job = $input['job'];
        $trainee->DOB = $input['dob'];
        $trainee->POB = $input['pob'];
        $trainee->blood = $input['blood'];
        $trainee->identity = $input['identity'];
        $trainee->marital_status = $input['marital_status'];
        $trainee->current_job = $input['current_job'];
        $trainee->job_title = $input['job_title'];
        if($input['job_status']){
            if($input['job_status'] !== 'أخرى'){
                $trainee->job_status = $input['job_status'];
            }else{
                $trainee->job_status = $input['job_status_more'];
            }   
        }
        $trainee->health_status = $input['health_status'];
        if($input['health_status'] == 'مريض'){
            if($input['disease_type'] !== 'أخرى'){
                $trainee->disease_type = $input['disease_type'];
            }else{
                $trainee->disease_type = $input['disease_type_more'];
            }
        }elseif($input['health_status'] == 'مصاب'){
            if($input['injury_type'] !== 'أخرى'){
                $trainee->injury_type = $input['injury_type'];
            }else{
                $trainee->injury_type = $input['injury_type_more'];
            }
        }
        $trainee->state = $input['state'];
        $trainee->city = $input['city'];
        $trainee->closest_place = $input['closest_place'];
        $trainee->closest_university = $input['closest_university'];
        $trainee->neighborhood = $input['neighborhood'];
        $trainee->street = $input['street'];
        $trainee->phone = $input['phone'];
        $trainee->mobile1 = $input['mobile1'];
        $trainee->mobile2 = $input['mobile2'];
        $trainee->email = $input['email'];
        $trainee->seat_number = $input['seat_number'];
        $trainee->institution = $input['institution'];
        $trainee->year = $input['year'];
        $trainee->GPA = $input['GPA'];
        $trainee->certificate_type = $input['certificate_type'];
        $trainee->grades = $input['grades'];
        $trainee->save();
        $trainee_certificates = $request->certificate;
        $certificates = Certificate::where('trainee_id',$id)->get();
        if(count($certificates)){
            $certificates->each(function ($certificate) {
                $certificate->delete();
            });
        }
        if(is_array($trainee_certificates)){
            for ($i=0; $i<count($trainee_certificates['type']);$i++){
                if(empty($trainee_certificates['type'][$i]) || empty($trainee_certificates['institution'][$i]) || empty($trainee_certificates['year'][$i]) || empty($trainee_certificates['GPA'][$i]) || empty($trainee_certificates['grades'][$i])) continue;
                $new_certificate = new Certificate();
                $new_certificate->trainee_id = $trainee->id;
                $new_certificate->type = $trainee_certificates['type'][$i];
                $new_certificate->institution = $trainee_certificates['institution'][$i];
                $new_certificate->year = $trainee_certificates['year'][$i];
                $new_certificate->GPA = $trainee_certificates['GPA'][$i];
                $new_certificate->grades = $trainee_certificates['grades'][$i];
                $new_certificate->save();            
            } 
        } 

        if($input['avatar_remove']==1){
            $trainee->clearMediaCollection('trainees');
        }

        if ($request->hasFile('avatar')) {
            $trainee->addMediaFromRequest('avatar')->preservingOriginal()->toMediaCollection('trainees');
        }
        else{
            $trainee->addMediaFromUrl(asset('admin\media\avatars\blank.png'))->preservingOriginal()->toMediaCollection('trainees');
        }
        $trainee->save();     
        return redirect()->route('trainees.index')->with('success', 'تم تعديل متدرب بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainee = Trainee::find($id);
        $trainee->clearMediaCollection('trainees');
        $trainee->delete();
    }   
    public function getAttendance(Request $request){
        $today = Carbon::today(); // Get the current date
        $course = Course::find($request->course);
        $trainees = $course->trainees;
        $lectures = $course->lectures()->where('date', '<=', $today)->get();
        $trainees = Trainee::with('lectures')->whereIn('id',$trainees->pluck('id'))->get();
        return view('admin.trainees.arrival',['course'=>$course,'lectures'=>$lectures,'trainees'=>$trainees]);
    }
    public function postAttendance(Request $request)
    {   
        $input = $request->input();
        $course = Course::find($request->course);
        $lectures = $course->lectures->pluck('id');
        $attendances = Attendance::whereIn('lecture_id',$lectures)->get();
        foreach($attendances as $attendance){
            $attendance->delete();
        }
        foreach($input['status'] as $key=>$status){
            foreach ($status as $key1=>$item){
                if($item == 'حضور'){
                    $attendance1 = new Attendance();
                    $attendance1->trainee_id = $key; 
                    $attendance1->lecture_id = $key1; 
                    $attendance1->status = 'حاضر'; 
                    $attendance1->save();

                }
            }
        }
        return redirect()->route('courses.show',$course->id)->with('trainee',TRUE)->with('success','تم حفظ جدول الحضور بنجاح');
        
    }
    public function getAttend($trainee,$course){
        $trainee = Trainee::find($trainee);
        $course = Course::find($course);
        $course_Lectures=$course->lectures;
        $trainee_lectures = $trainee->lectures->pluck('id');
        $trainee_lectures = $course_Lectures->whereNotIn('id',$trainee_lectures);
        ?>
        <select name="type" data-control="select1" data-placeholder="اختر النوع" data-hide-search="true" class="form-select form-select-solid fw-bolder">
            <option></option>
            <?php if(count($trainee_lectures)){
                foreach($trainee_lectures as $lecture){ ?>
                    <option value="<?php echo $lecture->id ?>"><?php echo $lecture->title ?></option>    
            <?php }
                 } ?>            
        </select>
        <?php
    }
}
