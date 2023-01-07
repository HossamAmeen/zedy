<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Client;
use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ClientController extends BackEndController
{
    public function __construct(Client $model)
    {
        parent::__construct($model);
    }
    public function store(Request $request){
       
        $requestArray = $request->all();
        if($request->hasFile('image'))
        {   
            //  return (intval($_FILES['image']['size']));
            if(intval($_FILES['image']['size']) > 50000000)
            {
                return redirect()->back()->withErrors([ 'لقد تجاوزت الحد الأقصى للصورة']);
            }
            $fileName = $this->uploadImage( $request , 530 , 432 );
            if(isset($requestArray['image']) )
                $requestArray['image'] =  $fileName;
        }
        $requestArray['user_id'] = Auth::user()->id;
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
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
    public function append($row)
    {
        $data['fields'] = Field::get();
        return $data;
    }
}
