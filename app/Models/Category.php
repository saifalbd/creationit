<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\{Arr, Str};

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'parent_id', 'active'];

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
}
