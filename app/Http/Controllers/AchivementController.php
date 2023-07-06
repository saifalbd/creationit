<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Achivement;
use Illuminate\Support\Facades\File;
class AchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Achivement::latest()->get();
        return view("Admin.frontend.achivement.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.frontend.achivement.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->title);
        $request->validate([
            'title' => "required|string|max:250",
            'sub_title' => "nullable|string|max:250",
            'description' => "nullable|string|max:450",
            'photo' => "required|mimes:jpg,jpeg,png,svg,gif",
            'condition'=> "required",
        ]);

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/achivement/',$imgName);
            $storeImg = 'upload/achivement/'.$imgName;
        }
       

        $store = Achivement::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'condition' => $request->condition,
            'photo' => $storeImg,
        ]);

        return redirect()->route("achivement.index")->with("success", $request->title.'is addess successfully');
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
        $data = Achivement::find($id);
        return view("Admin.frontend.achivement.edit", compact('data'));
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
         // dd($request->title);
         $request->validate([
            'title' => "required|string|max:250",
            'sub_title' => "nullable|string|max:250",
            'description' => "nullable|string|max:450",
            'condition'=> "required",
        ]);

        $data = Achivement::find($id);

        if($request->hasFile('photo')){
            $storePath = $data->photo;
            // delete existing file;
            if (File::exists($storePath)) {
                File::delete($storePath);
            }

            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/achivement/',$imgName);
            $storeImg = 'upload/achivement/'.$imgName;
            $data->photo = $storeImg;
        }
       

        $store = $data->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'condition' => $request->condition,
        ]);

        return redirect()->route("achivement.index")->with("success", $request->title.'is added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Achivement::find($id);
        
        if($data){
            $storePath = $data->photo;
            // delete existing file;
            if (File::exists($storePath)) {
                File::delete($storePath);
            }

            $data->delete();

            return redirect()->route('achivement.index')->with('danger','Successfull Student Deleted !');
    
        }
    }
}
