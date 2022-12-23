<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name' , 'ar_name' , 'image' ,"item_order", "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getImageAttribute($value)
    {
        return asset($value);
    }
}
