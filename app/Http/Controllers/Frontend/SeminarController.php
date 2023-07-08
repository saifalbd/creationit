<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\SeminarStatus;

class SeminarController extends Controller
{
    public function index(){
        $data = Seminar::latest()->get();
        $status = SeminarStatus::where('id',1)->first();
        return view("Admin.frontend.seminar", compact(['data','status']));
        
    }
    
    public function create(){
        $status = SeminarStatus::where('id',1)->first();
        return view("frontend.seminar-form",compact('status'));
    }


    // stude apply store
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
            'present_address' => 'required|max:250',
            'mobile' => 'required|numeric|min:11',
            'email' => 'required|email',
            'education' => 'required',
            'basic' => 'required',
            'comment' => 'nullable|max:500',
        ]);

        $store = Seminar::create($request->all());
        
        return redirect()->route('seminar.create')->with('success','Free Seminar Join Application is Successfully Submited !');


    }


    public function destroy($id){
        $data = Seminar::find($id);
        $data->delete();
        return redirect()->route('seminar.index')->with('success','Free Seminar Applied Student Deleted !');

    }

// seminar status change
    public function changeStatus(Request $request){
        $data = SeminarStatus::find(1);
        $data->update(['status'=>$request->status]);
        return redirect()->route('seminar.index');
    }

}
