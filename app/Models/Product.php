<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';
    protected $fillable=[
        'category_id',
        'title',
        'author',
        'original_price',
        'selling_price',
        'language',
        'nb_page',
        'edition_year',
        'quantity',
        'description',
        'small_description',
        'slug',
        'taxes',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function order(){
        return $this->hasMany(Order::class); 
    }
}
