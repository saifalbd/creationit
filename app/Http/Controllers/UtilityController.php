<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\CompanyInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class UtilityController extends Controller
{


    public function viewSetting(){
        $info = CompanyInfo::query()->first();
        if(!$info){
            $info = new \stdClass();
            $info->institute = '';
            $info->address = '';
            $info->mobile = '';
            $info->email = '';
            $info->tagline = '';

        }
        $s = $info;
        return view('Admin.pages.site_information',compact('s'));
    }


    public function storeSetting(Request $request){

        $request->validate([
            'institute'=>['required','string'],
'tagline'=>['required','string'],
'address'=>['required','string'],
'mobile'=>['required','string'],
'email'=>['required','email'],
'logo'=>['nullable','image','mimes:jpg,bmp,png'],
        ]);


        $info = CompanyInfo::query()->first();
        if(!$info){
            if(!$request->hasFile('logo')){
                $request->validate(['logo'=>['required','image','mimes:jpg,bmp,png']]);
            }
        }else{
            $avatar_id = $info->avatar_id;
        }

        if($request->has('logo')){
           $avatar =  Attachment::add($request->file('logo'),CompanyInfo::class);
           $avatar_id = $avatar->id;
        }

        $data = $request->only(['institute',
            'tagline',
            'address',
            'mobile',
            'email']);

        $data = array_merge($data,compact('avatar_id'));


        if($info){
            $info->update($data);
        }else{
            CompanyInfo::create($data);
        }

        Cache::delete('comInfo');

        return redirect()->back();

    }

    public function  authInfo(Request $request){
        $user = $request->user();
        return view("Admin.pages.authProfile",compact('user'));
    }

    public function  authUpdate(Request $request){
        $user = $request->user();

        $request->validate([
            'fullName'=>['required','string'],
            'email'=>['required','email'],
            'mobile'=>['required','numeric'],
            'photo'=>['nullable','image','mimes:jpg,bmp,png','max:500'],
        ]);

        $name = $request->fullName;
        $email = $request->email;
        $mobile = $request->mobile;
        $photo = $request->file('photo');

        $data = compact('name','email','mobile','photo');

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->file('photo'),User::class);
            $avatar_id = $avatar->id;
            $data['avatar_id'] = $avatar_id;
        }

        $user->update($data);
        return redirect()->back();





    }


    public function clearCaches()
    {
        /**
         * remove chche
         */
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');

        

        /*add Cache*/

        if(config('app.app_online')){
            Artisan::call('config:cache');
            Artisan::call('route:cache');
            Artisan::call('view:cache');
        }
       


        return redirect()->back();
    }
    public function addCaches()
    {
        /**
         * add cache
         */
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        return response('succesfully add new cache from now');
    }
}


