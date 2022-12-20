<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Media};
use FileHelper;
class ImagesController extends BackEndController
{
    public function __construct(Media $model)
    {
        parent::__construct($model);
    }
    public function getClassNameFromModel()
    {
      return "images";
    }
    public function store(Request $request){
          $requestArray = $request->all();
          if($request->hasFile('image'))
          {
            $fileName = $this->uploadImage( $request , 800 , 600 );
            // $fileName = FileHelper::storeImage("image", 'uploads/' . $this->getClassNameFromModel() . '/');
            if($fileName != false)
            $requestArray['path'] =  $fileName;
          }
            $requestArray['user_id'] = Auth::user()->id;
            $this->model->create($requestArray);
            session()->flash('action', 'تم الاضافه بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
    
        public function update($id , Request $request){
            $requestArray = $request->all();
            if($request->hasFile('image'))
            {
              $fileName = $this->uploadImage( $request , 800 , 600 );
              if(isset($requestArray['image']) )
              $requestArray['path'] =  $fileName;
            }           
            $row = $this->model->FindOrFail($id);
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
        protected function filter($rows)
        {
            return $rows->where('type','image');
        }

}
