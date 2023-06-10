<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.pages.instructor.index');
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
            'mobile'=>['required','numeric'],
            'email'=>['required','email'],
            'join_date'=>['required','date'],
            'salary'=>['required','numeric'],
            'photo'=>['nullable','image'],
            'address'=>['required','string']
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

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Instructor::class);
            $avatar_id = $avatar->id;
        }


        $data = compact('name','specialty','nid','designation','father_name','mother_name','mobile','email','join_date','salary','avatar_id','address');

        Instructor::create($data);
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
    public function edit($id)
    {
        return view('Admin.pages.instructor.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
