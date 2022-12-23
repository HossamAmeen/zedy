<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use App\Http\Requests\BackEnd\NewsRequest;
use  Auth,File;
use Illuminate\Support\Facades\Validator;
class ClientReviewController extends BackEndController
{
    public function __construct(ClientReview $model)
    {
        parent::__construct($model );
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),
        [
           
            'ar_description' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $requestArray = $request->all();
        if($request->hasFile('image'))
        { 
          $fileName = $this->uploadImage($request , 300 , 300 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){
        $validator = Validator::make($request->all(),
        [
           
            'ar_description' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $requestArray = $request->all();
        $row = $this->model->FindOrFail($id);
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage( $request ,300 , 300);
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
          if(File::exists($row->image) && 0) {
            File::delete($row->image);
        }
        }
        $requestArray['user_id'] = Auth::user()->id;
      
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
