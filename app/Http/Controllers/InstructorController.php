<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Instructor;
use App\Rules\BdPhone;
use App\Services\MessageSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::query()->with('avatar')->latest()->paginate();
        return view('Admin.pages.instructor.index',compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string'],
            'specialty'=>['required','string'],
            'nid'=>['required','numeric'],
            'designation'=>['required','string'],
            'father_name'=>['required','string'],
            'mother_name'=>['required','string'],
            'mobile'=>['required','numeric',new BdPhone,Rule::unique('instructors')],
            'email'=>['required','email',Rule::unique('instructors')],
            'join_date'=>['required','date'],
            'salary'=>['required','numeric'],
            'photo'=>['nullable','image','mimes:jpg,bmp,png'],
            'address'=>['required','string'],
            'facebook'=>['nullable','string'],
            'twitter'=>['nullable','string'],
            'linkedin'=>['nullable','string'],
           

        ]);

        $name = $request->name;
        $specialty = $request->specialty;
        $nid = $request->nid;
        $designation = $request->designation;
        $father_name = $request->father_name;
        $mother_name = $request->mother_name;
        $mobile = $request->mobile;
        $email = $request->email;
        $join_date = $request->join_date;
        $salary = $request->salary;
        $address = $request->address;
        $avatar_id = 1;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $linkedin = $request->linkedin;
        $pass = rand(100011,999999);
        $password = Hash::make($pass);
        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Instructor::class);
            $avatar_id = $avatar->id;
        }


        $data = compact('name','specialty','nid','designation',
        'father_name','mother_name','mobile','email','password','join_date','salary',
        'avatar_id','address','facebook','twitter','linkedin');

        
        Instructor::create($data);
        $comName = comInfo('institute');
        (new MessageSender)->sendSingle($mobile,"$comName n/ Sussfully Registard Your Instructor Account You Login Password is $pass");
        return redirect()->route('instructor.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        return view('Admin.pages.instructor.edit',compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'name'=>['required','string'],
            'specialty'=>['required','string'],
            'nid'=>['required','numeric'],
            'designation'=>['required','string'],
            'father_name'=>['required','string'],
            'mother_name'=>['required','string'],
            'mobile'=>['required','numeric',new BdPhone,Rule::unique('instructors')->whereNot('id',$instructor->id)],
            'email'=>['required','email',Rule::unique('instructors')->whereNot('id',$instructor->id)],
            'join_date'=>['required','date'],
            'salary'=>['required','numeric'],
            'photo'=>['nullable','image','mimes:jpg,bmp,png'],
            'address'=>['required','string'],
            'facebook'=>['nullable','string'],
            'twitter'=>['nullable','string'],
            'linkedin'=>['nullable','string'],
         
        ]);

        $name = $request->name;
        $specialty = $request->specialty;
        $nid = $request->nid;
        $designation = $request->designation;
        $father_name = $request->father_name;
        $mother_name = $request->mother_name;
        $mobile = $request->mobile;
        $email = $request->email;
        $join_date = $request->join_date;
        $salary = $request->salary;
        $address = $request->address;
        $avatar_id = $instructor->avatar_id;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $linkedin = $request->linkedin;
        

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Instructor::class);
            $avatar_id = $avatar->id;
            Attachment::remove($instructor->avatar);
        }


        $data = compact('name','specialty','nid','designation','father_name','mother_name','mobile','email','join_date','salary','avatar_id','address','facebook','twitter','linkedin');

        $instructor->update($data);
        return redirect()->route('instructor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {

        $this->authorize('delete',$instructor);
        $instructor->delete();

        return redirect()->back();
       
    }
}
