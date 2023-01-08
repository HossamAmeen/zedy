<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class JobController extends BackEndController
{
    public function __construct(Job $model)
    {
        parent::__construct($model);
    }
    public function store(Request $request){
       
        $requestArray = $request->all();
        if($request->hasFile('image'))
        { 
            $fileName = $this->uploadImage( $request , 530 , 432 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
        $requestArray['user_id'] = Auth::user()->id;
        $requestArray['type'] = join(",",$request->type);
        $item = $this->model->create($requestArray);
        if($request->item_order == null)
        {
            $item->item_order = $item->id + 2;
            $item->save();
        }
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){
        $requestArray = $request->all();
       
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage( $request ,530 , 432 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
        $row = $this->model->FindOrFail($id);        
        $requestArray['user_id'] = Auth::user()->id;
        $requestArray['type'] = join(",",$request->type);
        
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
