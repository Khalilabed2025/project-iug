<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Activity;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\CourseTrainer;
use App\Models\Lecture;
use App\Models\Rate;
use App\Models\Rating;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Validator;
use Auth; 

use Illuminate\Support\Carbon;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::get();
        $trainers = Trainer::get();
        $beneficiaries = Course::distinct()->pluck('beneficiary');
        $statuses = Course::distinct()->pluck('status');
        return view('admin.courses.index',['courses'=>$courses,'trainers'=>$trainers,'beneficiaries'=>$beneficiaries,'statuses'=>$statuses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers = Trainer::get();
        return view('admin.courses.create',['trainers'=>$trainers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'desc' => 'nullable|string',
            'field' => 'nullable|string',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'time' => 'nullable',
            'hours' => 'nullable|numeric',
            'program_nature' => 'nullable|string',
            'beneficiary' => 'nullable|string',
            'lectures_number' => 'nullable|numeric',
            'supervisor' => 'nullable|string',
            'capacity' => 'nullable|numeric',
            'price' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $course = new Course();
        $course->title = $input['title'];
        $course->desc = $input['desc'];
        $course->objectives = $input['objectives'];
        $course->field = $input['field'];
        $course->references = $input['references'];
        $course->start_date = $input['start_date'];
        $course->end_date = $input['end_date'];
        $course->time = $input['time'];
        $course->hours = $input['hours'];
        $course->lectures_number = $input['lectures_number'];
        $course->supervisor = $input['supervisor'];
        $course->capacity = $input['capacity'];
        $course->program_nature = $input['program_nature'];
        $course->beneficiary = $input['beneficiary'];
        $course->requirments = $input['requirments'];
        $course->destination = $input['destination'];
        $course->price = $input['price'];
        $course->user_id = Auth::id();

        if ($request->hasFile('avatar')) {
            $course->clearMediaCollection('courses');
            $course->addMediaFromRequest('avatar')->preservingOriginal()->toMediaCollection('courses');
        }
        else{
                $course->addMediaFromUrl(asset('admin/media/avatars/course.jpg'))->preservingOriginal()->toMediaCollection('courses');
        }
        $course->save();
        $course_lectures = $request->lecture;
        if(is_array($course_lectures)){
            for ($i=0; $i<count($course_lectures['number']);$i++){
                if(empty($course_lectures['number'][$i]) || empty($course_lectures['name'][$i])) continue;
                $new_lecture = new Lecture();
                $new_lecture->course_id = $course->id;
                $new_lecture->title = $course_lectures['name'][$i];
                $new_lecture->lecture_number = $course_lectures['number'][$i];
                $new_lecture->save();            
            } 

        } 
        return redirect()->route('courses.index')->with('success', 'تم إضافة دورة تدريبية بنجاح');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        $course_trainers = $course->trainers;
        $course_trainees = $course->trainees;
        $course_Lectures = $course->Lectures;
        $course_activities = $course->activities;
        $today_lecture = $course_Lectures->where('date',Carbon::now()->format('Y-m-d'))->first();
        $trainers = Trainer::whereNotIn('id',$course_trainers->pluck('id'))->get();
        $trainees = Trainee::whereNotIn('id',$course_trainees->pluck('id'))->get();
        return view('admin.courses.show',['course'=>$course,'trainers'=>$trainers,'trainees'=>$trainees,'course_trainers'=>$course_trainers,'course_trainees'=>$course_trainees,'course_Lectures'=>$course_Lectures,'course_activities'=>$course_activities,'today_lecture'=>$today_lecture,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $trainers = Trainer::get();
        return view('admin.courses.edit',['trainers'=>$trainers,'course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

    }
  
    public function deleteTrainer($courseId, $trainerId)
    {
        try {
            // Find the course and the trainer
            $course = Course::findOrFail($courseId);
            $trainer = Trainer::findOrFail($trainerId);

            // Detach the trainer from the course
            $course->trainers()->detach($trainer->id);

            return response()->json(['message' => 'Trainer deleted from course.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete trainer from course.'], 500);
        }
    }
    public function deleteTrainee($courseId, $traineeId)
    {
        try {
            // Find the course and the trainer
            $course = Course::findOrFail($courseId);
            $trainee = Trainee::findOrFail($traineeId);

            // Detach the trainer from the course
            $course->trainees()->detach($trainee->id);

            return response()->json(['message' => 'Trainee deleted from course.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete trainee from course.'], 500);
        }
    }
    public function addTrainer(Request $request)
    {
         $input = $request->input();
         $course = Course::findOrFail($input['course']);
         $trainer = Trainer::findOrFail($input['trainer']);
        if (!$course->trainers()->where('trainer_id',$input['trainer'])->exists()) {
            $course->trainers()->attach($trainer->id);
        }else{
            return redirect()->route('courses.show',$course->id)->with('error','هذا المدرب موجود بالفعل');
        }
         return redirect()->route('courses.show',$course->id);
    } 
    public function addTrainee(Request $request)
    {
         $input = $request->input();
         $course = Course::findOrFail($input['course']);
         $trainee = Trainee::findOrFail($input['trainee']);
         if (!$course->trainees()->where('trainees.trainee_id',$input['trainee'])->exists()) {
            $course->trainees()->attach($trainee->id);

        }else{
            return redirect()->route('courses.show',$course->id)->with('error','هذا المتدرب موجود بالفعل');
        }
         return redirect()->route('courses.show',$course->id);
    } 
    public function addLecture(Request $request)
    {
        $input = $request->input();
        $course = Course::findOrFail($input['course']);
        if($input['from'] and $input['to']){
            $start = Carbon::createFromFormat('H:i',$input['from']);
            $end = Carbon::createFromFormat('H:i',$input['to']);
            $hoursDifference = $start->floatDiffInHours($end);
        }
        $lecture = new Lecture();
        $lecture->title = $input['title'];
        $lecture->trainer_id = $input['trainer'];
        $lecture->course_id = $input['course'];
        $lecture->date = $input['date'];
        $lecture->from = $input['from'];
        $lecture->to = $input['to'];
        if($hoursDifference){
            $lecture->hours =$hoursDifference;
        }
        $lecture->save();
        return redirect()->route('courses.show',$course->id)->with('course',TRUE);
    } 
    public function updateLecture(Request $request)
    {
        $input = $request->input();
        if($input['from'] and $input['to']){
            $start = Carbon::createFromFormat('H:i',$input['from']);
            $end = Carbon::createFromFormat('H:i',$input['to']);
            $hoursDifference = $start->floatDiffInHours($end);
        }
        $lecture = Lecture::find($request->lecture);
        $lecture->title = $input['title'];
        $lecture->trainer_id = $input['trainer'];
        $lecture->date = $input['date'];
        $lecture->from = $input['from'];
        $lecture->to = $input['to'];
        if($hoursDifference){
            $lecture->hours =$hoursDifference;
        }
        $lecture->save();
        return redirect()->back()->with('course',TRUE);
    }
    public function addActivity(Request $request)
    {
        $input = $request->input();
        if($request->hasFile('file')){
            $lecture = new Activity();
            $lecture->title = $input['title'];
            $lecture->dead_line = $input['dead_line'];
            $lecture->course_id = $input['course'];
            $lecture->type = $input['type'];
            $lecture->save();
            $file = $request->file('file');
            $fileName = $input['course'].'_'.$file->getClientOriginalName();
            $subdirectory = 'activity/'; // Specify your desired subdirectory
            $lecture->file = $fileName ;
            $lecture->save();
            Storage::disk('public')->put($subdirectory.$fileName, file_get_contents($file));
            return redirect()->route('courses.show',$input['course'])->with('success','تم اضافة ال'.$input['type'].' بنجاح')->with('activity',TRUE);
        }else{
            return redirect()->route('courses.show',$input['course'])->with('error','لم تتم الإضافة')->with('activity',TRUE);
        }

    }
    
    public function attendTrainee(Request $request,$course,$trainee){
        $mytime = Carbon::now()->format('Y-m-d');       
        $lectures = Course::find($course)->Lectures; 
        $lecture = $lectures->where('date',$mytime)->first();
        $attend = Attendance::where('trainee_id',$trainee)->where('lecture_id',$lecture)->first();
        if(!is_Null($lecture) and is_Null($attend)){
            $attendance = new Attendance();
            $attendance->trainee_id =  $trainee;
            $attendance->lecture_id =  $lecture->id;
            $attendance->status =  'حاضر';
            $attendance->save();
              $data = [
            'message' =>  'تم تسجيل الحضور اليوم بنجاح',
            'value' => 'success',
            ];
            return response()->json($data);
        }else{
            $data = [
                'message' =>  'لا يوجد محاضرة اليوم',
                'value' => 'error',
            ];
            return response()->json($data);
        }
        

    }  
    public function attendLecture(Request $request,$traineeId){
        $lecture = Lecture::find($request->lecture); 
        if(!is_Null($lecture)){
            $attendance = new Attendance();
            $attendance->trainee_id =  $traineeId;
            $attendance->lecture_id =  $lecture->id;
            $attendance->status =  'حاضر';
            $attendance->save();
              $data = [
            'message' =>  'تم تسجيل الحضور بنجاح',
            'value' => 'success',
            ];
            return redirect()->back()->with('trainee',TRUE)->with('success',' تم تسجيل الحضور بنجاح');
        }else{
            $data = [
                'message' =>  'لا يوجد محاضرة اليوم',
                'value' => 'error',
            ];
            return redirect()->back()->with('trainee',TRUE)->with('error','لم يتم تسجيل الحضور');
        }
        

    }
     public function absentTrainee(Request $request,$course,$trainee){
        $mytime = Carbon::now()->format('Y-m-d');       
        $lectures = Course::find($course)->Lectures; 
        $lecture = $lectures->where('date',$mytime)->first();
        if(!is_Null($lecture)){
            $attendance = Attendance::where('lecture_id',$lecture->id)->first();
            $attendance->delete();
              $data = [
            'message' =>  'تم ازالة تسجيل حضور اليوم بنجاح',
            'value' => 'success',
            ];
            return response()->json($data);
        }else{
            $data = [
                'message' =>  'لا يوجد محاضرة اليوم',
                'value' => 'error',
            ];
            return response()->json($data);
        }
        

    }
    public function downloadFile(Request $request,$file){
        
        $filePath = storage_path('app/public/activity/' . $file);
        if (file_exists($filePath)) {
            $url = url('/storage/activity/' . $file); // Replace with the actual URL path
            return response()->json(['file_url' => $url]);
        } else {
            abort(404, 'File not found');
        }
        
    }
}
