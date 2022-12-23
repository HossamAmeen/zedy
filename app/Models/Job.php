<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name' ,"ar_name", 'type' ,"item_order", "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getImageAttribute($value)
    {
        return asset($value);
    }
}
