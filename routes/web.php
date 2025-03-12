<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TrainerController;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/test', [HomeController::class,'test'])->name('test');




Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('dashboard');
    Route::resource('trainers',TrainerController::class);
    Route::resource('trainees',TraineeController::class);
    Route::post('/delete',[TraineeController::class,'deleteSelected'])->name('deleteSelected');
    Route::resource('courses',CourseController::class);
    Route::get('/getQualification',[TrainerController::class,'getQualification'])->name('getQualification');
    Route::get('/getLecture',[TrainerController::class,'getLecture'])->name('getLecture');
    Route::delete('/courses/deleteTrainer/{courseId}/{trainerId}',[CourseController::class,'deleteTrainer'])->name('deleteTrainer');
    Route::delete('/courses/deleteTrainee/{courseId}/{traineeId}',[CourseController::class,'deleteTrainee'])->name('deleteTrainee');
    Route::post('/courses/addTrainer',[CourseController::class,'addTrainer'])->name('addTrainer');
    Route::post('/courses/addTrainee',[CourseController::class,'addTrainee'])->name('addTrainee');
    Route::post('/courses/addLecture',[CourseController::class,'addLecture'])->name('addLecture');
    Route::post('/courses/updateLecture',[CourseController::class,'updateLecture'])->name('updateLecture');
    Route::post('/courses/addActivity',[CourseController::class,'addActivity'])->name('addActivity');
    Route::get('/trash',[AdminController::class,'trash'])->name('trash');

    Route::get('/getAttend/{trainee}/{course}',[TraineeController::class,'getAttend'])->name('getAttend');



    Route::post('/evaluate-lecture',[AdminController::class,'evaluateLecture'])->name('evaluateLecture');
    Route::post('/evaluate-content',[AdminController::class,'evaluate'])->name('evaluate');
    
    Route::post('/get-rates/{course}/{lecture}',[AdminController::class,'getRates'])->name('getRates');
    Route::post('/get-activities/{course}',[AdminController::class,'getActivity'])->name('getActivity');
    Route::post('/get-content/{course}/{lecture}',[AdminController::class,'getContent'])->name('getContent');
    Route::post('/get-place/{course}/{lecture}',[AdminController::class,'getPlace'])->name('getPlace');
    Route::post('/downloadFile/{file}',[CourseController::class,'downloadFile'])->name('downloadFile');
    Route::get('/get-certificate',[AdminController::class,'getCertificate'])->name('getCertificate');


    Route::get('/export/{id}',[ExportController::class,'export'])->name('trainees.application');  //export Application
    Route::post('/courses-export',[ExportController::class,'coursesExport'])->name('courses-export'); //export yearly course and for beneficiary 
    Route::get('/overall/{id}',[ExportController::class,'courseOverall'])->name('course-overall'); //export course overall  
    Route::post('/course-trainers/{id}',[ExportController::class,'courseTrainers'])->name('course-trainers'); //export trainers of a specific course  
    Route::post('/courses-trainer',[ExportController::class,'coursesTrainer'])->name('courses-trainer'); //export courses of a specific trainer  
   
    Route::get('/attendance',[TraineeController::class,'getAttendance'])->name('getAttendance');
    Route::post('/attendance',[TraineeController::class,'postAttendance'])->name('postAttendance');
    Route::post('/courses/attendTrainee/{courseId}/{traineeId}',[CourseController::class,'attendTrainee'])->name('attendTrainee');
    Route::post('/courses/absentTrainee/{courseId}/{traineeId}',[CourseController::class,'absentTrainee'])->name('absentTrainee');
    Route::post('/courses/attendLecture/{traineeId}',[CourseController::class,'attendLecture'])->name('attendLecture');

});
Auth::routes();