<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;
    protected $fillable = [
       'item_order','type', 'path' ,'name','ar_name',"description","ar_description", "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getPathAttribute($value)
    {
        if ($this->type == "image")
            return asset($value);
        else
            return $value;
    }

    
}
