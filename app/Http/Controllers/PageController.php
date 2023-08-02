<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::orderBy('id','desc')->get();
        return view('Admin.frontend.page.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('Admin.frontend.page.create');
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
            'page_title' => 'required|string',
            'description' => 'nullable',
            'meta_desc' => 'nullable|string|max:255',
            'keywords' => 'nullable|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'file' => 'nullable',
        ]);
        // dd($request->menu);
        $check = Page::where('menu',$request->menu)->get();

        if(($check->count() > 0)){
            
            if($check[0]->menu == 1){
                return redirect()->route('page.create')->with('danger', 'You can`t create once more  the About page. Try to Edit');
            }
            elseif($check[0]->menu == 4){
                return redirect()->route('page.create')->with('danger', 'You can`t create once more  the Founder page. Try to Edit !');
            }
        }
        

        if($image = $request->file('photo')){
            $rand = rand(111111111,999999999);
            $imgExt = $image->getClientOriginalExtension();
            $imgName = $rand.'.'.$imgExt;
            $image->move('upload/page/',$imgName);
            $storeImg = 'upload/page/'.$imgName;
        }else{
            $storeImg = null;
        }

        if($image = $request->file('file')){
            $rand = rand(111111111,999999999);
            $imgExt = $image->getClientOriginalExtension();
            $fileName = $rand.'.'.$imgExt;
            $image->move('upload/attachment/',$fileName);
            $storeFile = 'upload/attachment/'.$fileName;
        }else{
            $storeFile = null;
        }

        $store = Page::create([
            'page_title' => $request->page_title,
            'description' => $request->description,
            'meta_desc' => $request->meta_desc,
            'keywords' => $request->keywords,
            'menu' => $request->menu,
            'photo' => $storeImg,
            'file' => $storeFile,
        ]);

        return redirect()->route('page.index');


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
        $data = Page::find($id);
        return view('Admin.frontend.page.edit', compact('data'));
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
            'page_title' => 'required|string',
            'description' => 'nullable',
            'meta_desc' => 'nullable|string|max:255',
            'keywords' => 'nullable|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'file' => 'nullable',
        ]);
        
        $check = Page::find($id);
        

        // page photo
        if($request->hasFile('photo')){
            $storePath = $check->photo;
            // delete existing file;
            if (File::exists($storePath)) {
                File::delete($storePath);
            }

            $image = $request->file('photo');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/page/',$imgName);
            $storeImg = 'upload/page/'.$imgName;
            $check->photo = $storeImg;
        }else{
            $storeImg = $check->photo;
        }

        // page attach
        if($request->hasFile('file')){
            $storePath = $check->file;
            // delete existing file;
            if (File::exists($storePath)) {
                File::delete($storePath);
            }

            $image = $request->file('file');
            $imgExt = $image->getClientOriginalExtension();
            $imgName = Str::random().time().'.'.$imgExt;
            $image->move('upload/attachment/',$imgName);
            $storeFile = 'upload/attachment/'.$imgName;
            $check->file = $storeFile;
        }else{
            $storeFile = $check->file;
        }

        $store = $check->update([
            'page_title' => $request->page_title,
            'description' => $request->description,
            'meta_desc' => $request->meta_desc,
            'keywords' => $request->keywords,
            'menu' => $request->menu,
            'photo' => $storeImg,
            'file' => $storeFile,
        ]);



        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Page::find($id);

        if($data){
            $photoPath = $data->photo;
            $filePath = $data->file;
            // delete existing file;
            if (File::exists($photoPath)) {
                File::delete($photoPath);
            }
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $data->delete();

            return redirect()->route('page.index')->with('danger','Page Deleted Successfull !');
    
        }

    }







}
