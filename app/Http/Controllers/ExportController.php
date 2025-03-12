<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\Rate;
use App\Models\Rating;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(Request $request){  
        $trainee = Trainee::find($request->id);
        $certificates = $trainee->certificates;
        return view('reports.application',['trainee'=>$trainee,'certificates'=>$certificates]);
    } 
    public function coursesExport(Request $request){
        $query = Course::query();
        if (!is_Null($request->input('status'))) {
            $query = $query->where('status', $request->input('status'));
        } 
        if (!is_Null($request->input('from')) && !is_Null($request->input('to'))) {
            $query = $query->where('start_date', '<=', $request->input('from'))->where('end_date', '>=', $request->input('to'));
        }

        if (!is_Null($request->input('year'))) {
            $query =$query->whereYear('start_date', $request->input('year'));
        }

        if (!is_Null($request->input('beneficiary'))) {
            $query = $query->where('beneficiary', $request->input('beneficiary'));
        }
        $filteredCourses = $query->get();
        if (!is_Null($request->input('beneficiary'))) {
            $beneficiary =$request->input('beneficiary');
            return view('reports.courses',['filteredCourses'=>$filteredCourses,'beneficiary'=>$beneficiary,]);
        }else{
            return view('reports.yearly-course',['filteredCourses'=>$filteredCourses]);
        }

    }
    public function courseOverall($id){
        $rated_course = Rating::where('course_id',$id)->get();
        $rates = Rate::get();
        $rated_lectures = $rated_course->pluck('lecture_id');
        $lectures = Lecture::whereIn('id', $rated_lectures)->orderBy('date')->get();
        $percentage = 0;
        $myArray = [];
        $tempArray = [];
        foreach($lectures as $lecture){
            array_push($tempArray, $lecture->title);
            array_push($tempArray, $lecture->date);
            $course_lectures = $rated_course->where('lecture_id',$lecture->id);
            foreach($rates as $rate){
                $course_rates =  $course_lectures ->where('rate_id',$rate->id);
                if(count($course_rates)){
                    foreach($course_rates as $item){
                        $percentage += $item->percentage;
                    }
                    $percentage = ($percentage/count($course_rates));
                }else {
                    $percentage = 0;
                }
                array_push($tempArray,round($percentage));
                $percentage = 0;
            }
            array_push($myArray, $tempArray);
            $tempArray = [];
        }
        return view('reports.course-overall',['ratings'=>$myArray,'rates'=>$rates]);  
    } 
    public function courseTrainers(Request $request, $id){
        $input = $request->input();
        if($input['trainer'] =='all'){
            $course = Course::find($id);
            $rated_course = Rating::where('course_id',$id)->get();
            $rated_lectures = $rated_course->pluck('lecture_id');
            $lectures = Lecture::whereIn('id', $rated_lectures)->orderBy('date')->get();        
            $rated_trainers = $rated_course->pluck('trainer_id');
            $trainers = Trainer::whereIn('id', $rated_trainers)->get();
            $myArray = [];
            $tempArray = [];
            $tempArray2 = [];
            foreach($lectures as $lecture){
                $course_lectures = $rated_course->where('lecture_id',$lecture->id);
                foreach($trainers as $trainer){
                    $course_rates =  $course_lectures ->where('trainer_id',$trainer->id);
                    if(count($course_rates)){
                        array_push($tempArray, $lecture->title);
                        array_push($tempArray, $lecture->date);
                        array_push($tempArray, $trainer->name);
                        foreach($course_rates as $item){
                            $tempArray2[$item->rate_id] = $item->percentage;
                        }                        
                        array_push($tempArray,$tempArray2);
                        array_push($myArray, $tempArray);
                        $tempArray = [];
                        $tempArray2 = [];
                    }
                }    
            }
            return view('reports.course-trainers', ['myArray'=>$myArray,'course'=>$course]);  
        }else{
            $course = Course::find($id);
            $rated_course = Rating::where('course_id',$id)->get();
            $rated_lectures = $rated_course->pluck('lecture_id');
            $lectures = Lecture::whereIn('id', $rated_lectures)->orderBy('date')->get();        
            $rated_trainer = $rated_course->where('trainer_id',$input['trainer']);
            $trainer = Trainer::find($input['trainer']);
            $percentage = 0;
            $myArray = [];
            $tempArray = [];
            $tempArray2 = [];
            foreach($lectures as $lecture){
                $course_lectures = $rated_course->where('lecture_id',$lecture->id);
                $course_rates =  $course_lectures ->where('trainer_id',$input['trainer']);
                if(count($course_rates)){
                    array_push($tempArray, $lecture->title);
                    array_push($tempArray, $lecture->date);
                    array_push($tempArray, $trainer->name);
                    foreach($course_rates as $item){
                        $tempArray2[$item->rate_id] = $item->percentage;
                    }                        
                    array_push($tempArray,$tempArray2);
                    array_push($myArray, $tempArray);
                    $tempArray = [];
                    $tempArray2 = [];
                }     
            }
            return view('reports.course-trainer', ['myArray'=>$myArray,'course'=>$course,'trainer'=>$trainer]); 
        }
    }
    public function coursesTrainer(Request $request){
        $input = $request->input();
        $trainer = Trainer::find($input['trainer']);
        $rated_course = Rating::where('trainer_id',$input['trainer'])->get();

        $rated_courses = $rated_course->pluck('course_id');
        $courses = Course::whereIn('id', $rated_courses)->get();  

        $rated_lectures = $rated_course->pluck('lecture_id');
        $lectures = Lecture::whereIn('id', $rated_lectures)->orderBy('date')->get(); 

        $percentage = 0;
        $myArray = [];
        $tempArray = [];
        $tempArray2 = [];
        foreach($courses as $course){
            $course1 = $rated_course->where('course_id',$course->id);
            foreach($lectures as $lecture){
                $course_lectures = $course1->where('lecture_id',$lecture->id);
                $course_rates =  $course_lectures ->where('trainer_id',$trainer->id);
                    if(count($course_rates)){
                        array_push($tempArray, $course->title);
                        array_push($tempArray, $course->location);
                        array_push($tempArray, $lecture->title);
                        array_push($tempArray, $lecture->date);
                        foreach($course_rates as $item){
                            $tempArray2[$item->rate_id] = $item->percentage;
                        }                        
                        array_push($tempArray,$tempArray2);
                        array_push($myArray, $tempArray);
                        $tempArray = [];
                        $tempArray2 = [];
                    }     
            }
        }
        return view('reports.courses-trainer', ['myArray'=>$myArray,'trainer'=>$trainer]); 
    }
}
