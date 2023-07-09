<?php

namespace App\Http\Controllers;
use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Slider;
use App\Models\contact;
use App\Models\Video;

class SliderController extends Controller
{
    // create 
    public function create(){
        $data = Slider::all();
        return view('Admin.frontend.slider.create', compact('data'));
    }


    // slider store
    public function store(Request $request){

        $request->validate([
            'title' => "required",
            'photo' => "required",
            'serial' => "required|unique:sliders",
        ]);

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/slider/',$imgName);
            $storeImg = 'upload/slider/'.$imgName;
        }

        Slider::create([
            'title' => $request->title,
            'serial'=> $request->serial,
            'photo'=> $storeImg,
        ]);

        return redirect()->route('slider.create')->with('success','Slider Successfully Create !');


    }


    public function destroy($id){

        $destroy = Slider::find($id);
        $destroy->delete();

        return redirect()->route('slider.create')->with('destroy','Slider Successfully Deleted !');

    }



    public function contactView(){
        $data = contact::latest()->get();
        return view("Admin.frontend.page.contact_view", compact('data'));
    }


    public function delete(Request $request){
        $data = contact::find($request->contact_id);
        $data->delete();
        return redirect()->route('contact.show')->with('danger','Contact Message Successfully Deleted !');
    }


//video create
    public function Videocreate(){
        $data = Video::all();
        return view('Admin.frontend.video', compact('data'));
    }

    public function videoUpdate(Request $request){
        $request->validate([
            'link' => "required",
            'photo' => "required",
        ]);

        $data = Video::find(1);

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/video/',$imgName);
            $storeImg = 'upload/video/'.$imgName;
            $data->photo = $storeImg;
        }
        
        $data->update(['link'=>$request->link,'photo'=>$storeImg]);
        return redirect()->route('video.create');

    }


}

















