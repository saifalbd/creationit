<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

// use Intervention\Image as Image;

use Illuminate\Support\Facades\Http;

class IdCard
{



    public function make(Student $student){

       

        $student->load(['courses.batch','avatar']);

       
        $studentImg= Storage::disk($student->avatar->disk)->path($student->avatar->path);

        $batchName = $student->courses->pluck('batch')->pluck('title')->join(',');
        $date = format(now()->toDateString());


        $path = Storage::disk('public')->path('idcard.jpg');
        $fontPath = public_path('assets/font/Poppins/Poppins-Regular.ttf');

        $fontBold = public_path('assets/font/Poppins/Poppins-Bold.ttf'); 


        $studentImage = \Image::make( $studentImg);

        $studentImage->resize(250, 305);



        $img = \Image::make($path);


        $img->insert($studentImage , 'top-left', 95, 75);


        $img->text(Str::upper($student->name), 420, 315,function($font)use($fontBold){   
            $font->file($fontBold);
            $font->size(40);
            $font->color('#FF0000');
          });


          
        $img->text($student->courseNames, 420, 350,function($font)use($fontPath){   
            $font->file($fontPath);
            $font->size(25);
            $font->color('#0000');
          });


        $top = 530;
        $img->text($student->id, 430, $top,function($font)use($fontPath){   
            $font->file($fontPath);
            $font->size(20);
            $font->color('#0000');
          });


          $img->text($batchName, 580,$top,function($font)use($fontPath){   
            $font->file($fontPath);
            $font->size(20);
            $font->color('#0000');
          });

          $img->text($date, 770,$top,function($font)use($fontPath){   
            $font->file($fontPath);
            $font->size(20);
            $font->color('#0000');
          });




        return $img->response('jpg');



    }


}