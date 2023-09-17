<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\{Arr, Str};

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','quantity','rate','active','avatar_id','category_id','op_qty','op_pur_rate','avg_pur_rate'];

    protected static function slugAdd($query)
    {
        if (!Arr::has($query->attributes, 'slug')) {
            $slug = Str::slug($query->title);
            $last = static::query()->select('id')->latest('id')->first();
            if ($last) {
                $slug = $last->id . '-' . $slug;
            }
            $query->slug = $slug;
        }
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($query) {
            static::slugAdd($query);
        });
        static::updating(function ($query) {
            static::slugAdd($query);
        });
    }

    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
