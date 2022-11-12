<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;
    protected $fillable = [
       'item_order','type', 'path' ,'name','ar_name', "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getPathAttribute($value)
    {
        return asset($value);
    }

    
}
