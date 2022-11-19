<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    protected $fillable = [
        'name' , 'description','ar_name' , 'ar_description', 'image'  , "field_id", "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function field(){
        return $this->belongsTo(Field::class);
    }
    public function getImageAttribute($value)
    {
        return asset($value);
    }
}
