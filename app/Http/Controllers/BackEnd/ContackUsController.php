<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Http\Requests\BackEnd\NewsRequest;
use  Auth,File;
class ContackUsController extends BackEndController
{
    public function __construct(ContactUs $model)
    {
        parent::__construct($model );
    }
    public function contact_us_count()
    {
        return response()->json(['contact_count'=>ContactUs::count()]);
    }
}
