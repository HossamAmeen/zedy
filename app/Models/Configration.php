<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configration extends Model
{
    protected $fillable = ["ar_title", "title", "slide_description", "ar_slide_description", "description" ,
    "en_description", "projects_counter",  "experience_year_counter", "address" ,"ar_address",
    "email",  "youtube", "behance", "company_profile" ,"Visual_identity_samples", "facebook", "linkedin" ,"whatsapp" ,"twitter", "google_play_link",
     "instagram", "location", "phone" ,"phone2" , 'job_form_link', 'internship_form_link', 'training_course_count' ,'trainee_count', 'footer_meta','head_meta'];
}
