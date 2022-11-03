<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configration extends Model
{
    protected $fillable = ["ar_title", "title", "slide_description", "ar_slide_description", "description" ,
    "en_description", "projects_counter",  "experience_year_counter", "address" ,"ar_address",
    "email",  "youtube", "behance", "company_profile" ,"Visual_identity_samples", "facebook", "linkedin" ,"whatsapp" ,"twitter",
     "instagram", "location", "phone" ,"phone2" ];
}
