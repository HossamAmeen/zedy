<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\VideoRequest;
use App\Http\Controllers\Controller;
use App\Models\Media;

class VideoController extends BackEndController
{
    public function __construct(Media $model)
    {
        parent::__construct($model);
    }
    public function getClassNameFromModel()
    {
      return "videos";
    }
    public function store(Request $request){
            $requestArray = $request->all();
            
         
            $requestArray['user_id'] = Auth::user()->id;
            $item = $this->model->create($requestArray);
            session()->flash('action', 'تم الاضافه بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
    
        public function update($id , Request $request){
            $requestArray = $request->all();
            $row = $this->model->FindOrFail($id);           
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
        protected function filter($rows)
        {
            return $rows->where('type','!=','image');
        }
}
