<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.pages.student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.student.create');
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
            'name' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'education' => 'nullable|string',
            'mobile' => 'required|numeric',
            'mobile_guardian' => 'required|string',
            'email' => 'required|email',
            'photo' => 'nullable|image|size:1024',
            'present_address' => 'required|text|max:255',
            'permanent_address' => 'required|text|max:255',
            'type' => 'required|string',
            'course' => 'required|string',
            'batch' => 'required',
            'roll' => 'required|numeric',
            'reg' => 'required|numeric',
            'academic' => 'nullable|required',
            'session' => 'nullable|string',
            'fee' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'payable' => 'nullable|numeric',
            'first' => 'nullable|numeric',
            'first_date' => 'nullable|date',
            'second' => 'nullable|numeric',
            'second_date' => 'nullable|date',
            'third' => 'nullable|numeric',
            'third_date' => 'nullable|date',
            'reference' => 'nullable|string',
            'ref_address' => 'nullable|text|max:255',
            'ref_mobile' => 'nullable|numeric',


        ]);
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
        return view('Admin.pages.student.edit');
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
