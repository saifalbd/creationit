<?php
namespace App\Services;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use chillerlan\QRCode\{QRCode, QROptions};


class Certificate {

    public Student $student;
    public Course $course;
    public $colorOne = '#0000';
    public $colorTwo = '#0000';

    function __construct(Student $student,Course $course)
    {
        $this->student = $student;
        $this->course = $course;


    }

    public function qrCode(){
        $data = route('certificate',['student'=>$this->student->id,'course'=>$this->course->id]);
        $options =  new QROptions([
        'imageTransparent'    => false,
        'scale'=>15,
    
      ]);
    
        $qrcode = new QRCode($options);
       return $qrcode->render( $data);
       
      }


      
    
        public function certificate(Student $student){
        $qr = $this->qrCode($student);


        $left1 = 200;

        $left2 = 800;
    
      
        
      
        $path = Storage::disk('public')->path('img/c.jpg');
        $logoPath = Storage::disk('public')->path(comInfo('sLogo')->path);

     
        // return     $path;
       $fontPath = Storage::disk('public')->path('font/esDR31xSG-6AGleN6tKukbcHCpE.ttf');
       $img = Image::make($path);

      /*----------------------------------START LEFT PART-------------------------------------*/

      
      $img->insert($logoPath , 'top-left', $left1, 50);

      $admitionIDTop = 500;
      $admitionIDNumerTop = $admitionIDTop+110;

      $courseNameTop = $admitionIDNumerTop+200;
      $courseNameValueTop = $courseNameTop+100;


      $img->text("ADMITION ID", $left1, $admitionIDTop,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(100);
        $font->color('#0000');
      });

      $img->text($student->id, $left1+200,$admitionIDNumerTop,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(100);
        $font->color('#0000');
      });


      $img->text("Course Name", $left1,$courseNameTop,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(100);
        $font->color('#0000');
      });

      $img->text($this->course->name, $left1+200,$courseNameValueTop,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(100);
        $font->color('#0000');
      });


    
       $img->text($student->name, $left2, 1250,function($font)use($fontPath){   
         $font->file($fontPath);
         $font->size(120);
         $font->color('#0000');
       });
       $courseName = $this->course->name;
       $insName = comInfo('institute');
       $textOne = "Son/Doughter of Mr. Rafik Ahemd Has successfully completed";
       $textTwo = "the $courseName held 01";
       $textThree = "at $insName";
       $img->text($textOne, $left2, 1380,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(60);
       
        $font->color('#0000');
      });

      $img->text($textTwo , $left2, 1480,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(60);
       
        $font->color('#0000');
      });
      $img->text($textThree , $left2, 1580,function($font)use($fontPath){   
        $font->file($fontPath);
        $font->size(60);
       
        $font->color('#0000');
      });

       $date = $student->created_at->format('jS \\of F Y');
       $certificateNo = 585;
    
       $img->text("Date: $date | Certificate No: $certificateNo", 140, 1700,function($font)use($fontPath){   
         $font->file($fontPath);
         $font->size(60);
         $font->color('#0000');
       });     
    
      
       $move = 100;
       $img->insert($qr,'top-right',$move,$move);
    
    
       return $img->response('jpg');
        }

}