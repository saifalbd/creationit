<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SuccessStudent;
use Illuminate\Support\Facades\File;


class SuccessStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuccessStudent::orderBy('id','desc')->get();
        return view("Admin.frontend.success.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.frontend.success.create");
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
            'photo' => 'required|mimes:jpeg,jpg,png,svg',
            'designation' => 'nullable|string',
            'course' => 'required|string',
        ]);


        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/student/',$imgName);
            $storeImg = 'upload/student/'.$imgName;
        }
       

        $store = SuccessStudent::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'course' => $request->course,
            'photo' => $storeImg,
        ]);

        return redirect()->route('successfull.index')->with('success','Successfull Student Added !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SuccessStudent::find($id);
        
        return view('Admin.frontend.success.edit', compact('data'));
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
        $request->validate([
            'name' => 'required|string',
            'designation' => 'nullable|string',
            'course' => 'required|string',
        ]);

        $data = SuccessStudent::find($id);


        if($request->hasFile('photo')){
            $storePath = $data->photo;
            // delete existing file;
            if (File::exists($storePath)) {
                File::delete($storePath);
            }

            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/student/',$imgName);
            $storeImg = 'upload/student/'.$imgName;
            $data->photo = $storeImg;
        }
       

        $store = $data->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'course' => $request->course,
        ]);

        return redirect()->route('successfull.index')->with('success','Successfull Student Updated !');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SuccessStudent::find($id);
        
        if($data){
            $storePath = $data->photo;
            // delete existing file;
            if (File::exists($storePath)) {
                File::delete($storePath);
            }

            $data->delete();

            return redirect()->route('successfull.index')->with('danger','Successfull Student Deleted !');
    
        }
    }





}


