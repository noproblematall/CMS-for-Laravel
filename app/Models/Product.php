<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id','product_name','category_id','vendor','description','price','user_id','sold'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
