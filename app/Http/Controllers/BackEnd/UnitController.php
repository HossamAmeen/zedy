<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\{Unit,Project};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
class UnitController extends BackEndController
{
    public function __construct(Unit $model)
    {
        parent::__construct($model);
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
            $fileName = $this->uploadImage( $request , 400 , 400);
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
        $requestArray['availability'] = $this->get_availability( $request->ar_availability);
        $requestArray['project_type'] = $this->get_project_type( $request->ar_project_type);
        $requestArray['user_id'] = Auth::user()->id;
        // return $requestArray;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){
        $validator = Validator::make($request->all(),
        [
            'ar_type' => 'required',
            'type' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage( $request ,400 , 400);
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        $row = $this->model->FindOrFail($id);        
        $requestArray['user_id'] = Auth::user()->id;
        $requestArray['availability'] = $this->get_availability( $request->ar_availability);
        $requestArray['project_type'] = $this->get_project_type( $request->ar_project_type);
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
    
    public function append($row)
    {
        $data['projects'] = Project::all();
        return $data;
    }
    public function get_project_type($project_type)
    {
        if($project_type == "سكني") 
            return "residential";
        if($project_type == "إداري") 
            return "commercial";
        if($project_type == "تجاري") 
            return "administrative";
        if($project_type == "طبي") 
            return "medical";
        if($project_type == "جراج") 
            return "garage";
    }
    public function get_availability($availability)
    {
        if($availability == "قريبا") 
        return "soon";
        if($availability == "متوفره") 
            return "available";
        if($availability == "محجوزة بالكامل") 
            return "complete";
    }
}