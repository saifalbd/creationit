<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use chillerlan\QRCode\{QRCode, QROptions};


class Cert
{



    public function addQRCode($student,$course){
        $data = route('student.certification.view',['student'=>$student->id,'course'=>$course->id]);
        $options =  new QROptions([
        'imageTransparent'    => false,
        'scale'=>12,
    
      ]);
    
        $qrcode = new QRCode($options);
       return $qrcode->render( $data);
    }


    public function make(Student $student,$course){


        

     

       

       
 

       
        $date = format(now()->toDateString());


        $path = Storage::disk('public')->path('cert.jpg');
        $fontPath = public_path('assets/font/Poppins/Poppins-Regular.ttf');

        $fontThin = public_path('assets/font/Poppins/Poppins-Light.ttf'); 

        $fontBold = public_path('assets/font/Poppins/Poppins-SemiBold.ttf'); 


      

      



        $img = \Image::make($path);


        $img->insert($this->addQRCode($student,$course) , 'top-left', 140, 1680);

        $left = 150;
        $fontsize = 60;

        $addmitionID = "CIT-".$student->serial;
        $batchName = $course->batch->title;
  

        $img->text($addmitionID, $left, 900,function($font)use($fontBold,$fontsize){   
            $font->file($fontBold);
            $font->size($fontsize);
            $font->color('#0000');
          });

      

          $img->text($batchName, $left, 1150,function($font)use($fontBold,$fontsize){   
            $font->file($fontBold);
            $font->size($fontsize);
            $font->color('#0000');
          });

          $date = now()->format('d-M-Y');
          $img->text($date, $left, 1390,function($font)use($fontBold,$fontsize){   
            $font->file($fontBold);
            $font->size($fontsize);
            $font->color('#0000');
          });



          $left = 1050;
          
          $img->text(Str::upper($student->name), $left, 1180,function($font)use($fontBold,$fontsize){   
            $font->file($fontBold);
            $font->size(100);
            $font->color('#0000');
          });


          $fatherName = $student->father_name;
          $lineOne = "Son of $fatherName has succesfully completed";
          $img->text($lineOne, $left, 1300,function($font)use($fontThin,$fontsize){   
            $font->file($fontThin);
            $font->size(60);
            $font->color('#0000');
          });

          $courseName = $course->name;
          $academic_year = $course->academic_year;
          $month = $course->session;
          $lineTwo = "the $courseName held on ".$month."/".$academic_year."";
          $img->text($lineTwo, $left, 1390,function($font)use($fontThin,$fontsize){   
            $font->file($fontThin);
            $font->size(60);
            $font->color('#0000');
          });

          $lineThree = "to ".$month."/".$academic_year." at Creation Institute of Technology.";
          $img->text($lineThree, $left, 1480,function($font)use($fontThin,$fontsize){   
            $font->file($fontThin);
            $font->size(60);
            $font->color('#0000');
          });






       



        return $img->response('jpg');



    }


}