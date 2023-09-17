<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderEditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *saleType: "customer",
       
     * @return array<string, mixed>
     */
    public function toArray( $request): array
    {
        $typeId = null;
        if($this->student_id){
            $typeId = $this->student_id;   
        }else if($this->teacher_id){
            $typeId = $this->teacher_id; 
        }
        return [
           'saleType'=>$this->is,
           'typeId'=>$typeId,
            'date'=>$this->date,
            'name'=>$this->name,
            'mobile'=>$this->mobile,
            'address'=>$this->address,
            'total'=>$this->total,
            'discount'=>$this->discount,
            'paid'=>$this->paid,
            'due'=>$this->due,
            'items'=>$this->items->map(function($item){
                return [
                    'product'=>$item->product_id,
                    'quantity'=>$item->quantity,
                    'rate'=>$item->rate,
                    'total'=>$item->total
                ];
            })
        ];
    }
}
