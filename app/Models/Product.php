<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'image_path',
        'category_id'
    ];

    public function scopeFilter($query){
        if(request('search')){
            return $query->where('name', 'like', '%' . request('search') . '%')
                        ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }

    public function category(){
        return $this-> belongsTo(Category::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
