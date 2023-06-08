<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class Attachment extends Model
{
    protected $fillable = ['type','disk','path','model','is_default'];

    protected $appends = ['url'];

    protected static function booted()
    {
        static::deleting(function($model){
            $disk = Storage::disk($model->disk);
            $disk->delete($model->path);
        });
    }


 
    public static function add(UploadedFile $file,string $model):Attachment{
        $model = class_basename($model);
       $type = $file->getClientMimeType();
       $ex = $file->getClientOriginalExtension();
       $disk = 'public';
       $slug = $model;
       $uid = uniqid();
       $name = $uid.'.'.$ex;
       $path  =$slug.'/'.$name;
      

        Storage::disk($disk)->put($path,$file);

       

    

       
      return static::create(compact('disk','path','model'));
       
    }
   

    public function getUrlAttribute()
    {
        $disk = Storage::disk($this->disk);
        return $disk->url($this->path);
    }
    

 

    public function deleteWithAttach(){
        $disk = $this->disk;
        Storage::disk($disk)->delete($this->path);
        $this->delete();
    }
}
