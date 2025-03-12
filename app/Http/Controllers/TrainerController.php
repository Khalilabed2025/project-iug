<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;
use App\Models\Trainer;
use Validator;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::get();
        return view('admin.trainers.index',['trainers'=>$trainers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trainers.create');
    }
/*     <span>@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif</span>
    <span>@if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif</span> */



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'bio' => 'nullable|string',
            'email' => 'nullable|email',
            'specilization' => 'nullable|string',
            'fields' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|numeric|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $trainer = new Trainer();
        $trainer->name = $input['name'];
        $trainer->bio = $input['bio'];
        $trainer->email = $input['email'];
        $trainer->specilization = $input['specilization'];
        $trainer->fields = $input['fields'];
        $trainer->hobbies = $input['hobbies'];
        $trainer->skills = $input['skills'];
        $trainer->projects = $input['projects'];
        $trainer->address = $input['address'];
        $trainer->phone = $input['phone'];

        if ($request->hasFile('avatar')) {
            $trainer->addMediaFromRequest('avatar')->preservingOriginal()->toMediaCollection('trainers');
        }
        else{
            $trainer->addMediaFromUrl(asset('admin\media\avatars\blank.png'))->preservingOriginal()->toMediaCollection('trainers');
        }
        $trainer->save();
        $trainer_qualification = $request->qualification;
        if(is_array($trainer_qualification)){
            for ($i=0; $i<count($trainer_qualification['from']);$i++){

                if(empty($trainer_qualification['from'][$i]) || empty($trainer_qualification['to'][$i]) || empty($trainer_qualification['title'][$i]) || empty($trainer_qualification['institution'][$i])) continue;
                $new_qualification = new Qualification();

                $new_qualification->trainer_id = $trainer->id;
                $new_qualification->start_date = $trainer_qualification['from'][$i];
                $new_qualification->end_date = $trainer_qualification['to'][$i];
                $new_qualification->title = $trainer_qualification['title'][$i];
                $new_qualification->institution = $trainer_qualification['institution'][$i];
                $new_qualification->save();            
            } 

        } 
        return redirect()->route('trainers.index')->with('success', 'تم إضافة متدرب بنجاح');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Trainer::find($id);
        $courses = $trainer->courses;
        $trainer_trainees = $trainer->trainees;
        $qualifications = $trainer->qualifications;

        return view('admin.trainers.show',['trainer'=>$trainer,'courses'=>$courses,'trainer_trainees'=>$trainer_trainees,'qualifications'=>$qualifications]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainer = Trainer::find($id);
        $qualifications = $trainer->qualifications;
        return view('admin.trainers.edit',['trainer'=>$trainer,'qualifications'=>$qualifications]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->input();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'bio' => 'nullable|string',
            'email' => 'nullable|email',
            'specilization' => 'nullable|string',
            'fields' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|numeric|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $trainer = Trainer::find($id);
        $trainer->name = $input['name'];
        $trainer->bio = $input['bio'];
        $trainer->email = $input['email'];
        $trainer->specilization = $input['specilization'];
        $trainer->fields = $input['fields'];
        $trainer->hobbies = $input['hobbies'];
        $trainer->skills = $input['skills'];
        $trainer->projects = $input['projects'];
        $trainer->address = $input['address'];
        $trainer->phone = $input['phone'];
        if($input['avatar_remove']==1){
            $trainer->clearMediaCollection('trainers');
        }
        if ($request->hasFile('avatar')) {
            $trainer->clearMediaCollection('trainers');
            $trainer->addMediaFromRequest('avatar')->preservingOriginal()->toMediaCollection('trainers');
        }
        else{
            $trainer->addMediaFromUrl(asset('admin\media\avatars\blank.png'))->preservingOriginal()->toMediaCollection('trainers');
        }
        $trainer->save();
        $trainer_qualification = $request->qualification;
        $qualifications = Qualification::where('trainer_id',$id)->get();
        if(count($qualifications)){
            $qualifications->each(function ($qualification) {
                $qualification->delete();
            });
        }
        if(is_array($trainer_qualification)){
          
            for ($i=0; $i<count($trainer_qualification['from']);$i++){

                if(empty($trainer_qualification['from'][$i]) || empty($trainer_qualification['to'][$i]) || empty($trainer_qualification['title'][$i]) || empty($trainer_qualification['institution'][$i])) continue;
                $new_qualification = new Qualification();

                $new_qualification->trainer_id = $trainer->id;
                $new_qualification->start_date = $trainer_qualification['from'][$i];
                $new_qualification->end_date = $trainer_qualification['to'][$i];
                $new_qualification->title = $trainer_qualification['title'][$i];
                $new_qualification->institution = $trainer_qualification['institution'][$i];
                $new_qualification->save();            
            } 

        } 
        return redirect()->route('trainers.index')->with('success', 'تم إضافة مدرب بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainer = Trainer::find($id);
        $trainer->clearMediaCollection('trainers');
        $trainer->delete();
    }
    public function getQualification(){
        $random_id = rand(1111,9999);
        ?>
        <div  class="mt-4 ms-0 row modal_div_<?php echo $random_id; ?>">
            <!--begin::Col-->
            <div class="col-md-2 ">
                <label  class="required fs-6 fw-bold mb-2">تاريخ البداية</label>
                <input type="text" class="form-control form-control-solid" placeholder="تاريخ البداية" name="qualification[from][]"/>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-2 fv-row">
                <label class="required fs-6 fw-bold mb-2">تاريخ النهاية</label>
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="تاريخ النهاية" name="qualification[to][]"/>
                <!--end::Input-->
            </div>
            <!--end::Col--> 
            <!--begin::Col-->
            <div class="col-md-4 fv-row">
                <label class="required fs-6 fw-bold mb-2">الدرجة</label>
                <input type="text" class="form-control form-control-solid" placeholder="ادخل الدرجة" name="qualification[title][]"/>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-3 fv-row">
                <label class="required fs-6 fw-bold mb-2">المؤسسة التعليمية</label>
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="المؤسسة التعليمية" name="qualification[institution][]"/>
                <!--end::Input-->
            </div>
            <!--end::Col-->
            <div style="display: flex;align-items: flex-end;" class="col-md-1 fv-row">	
				<span onclick="delete_row(<?php echo $random_id; ?>)" class="delete_btn btn btn-danger">X</span>
			</div>
        </div>
        <?php

        
    }
    public function getLecture(){
        $random_id = rand(1111,9999);
        ?>
        <div class="mt-4 ms-0 row modal_div_<?php echo $random_id; ?>">
             <!--begin::Col-->
             <div class="col-md-2 fv-row">
                <label class="fs-6 fw-bold mb-2">رقم المحاضرة</label>
                <input type="number" class="form-control form-control-solid" placeholder="رقم المحاضرة" name="lecture[number][]" min="1" max="9999"/>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-9 fv-row">
                <label class="fs-6 fw-bold mb-2">اسم المحاضرة</label>
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="اسم المحاضرة" name="lecture[name][]"/>
                <!--end::Input-->
            </div>
            <!--end::Col--> 
            <div style="display: flex; align-items: flex-end;" class="col-md-1">	
			<span onclick="delete_row(<?php echo $random_id; ?>)" class="delete_btn btn btn-danger">X</span>
			</div>
        </div>
        <?php 
    }
}
