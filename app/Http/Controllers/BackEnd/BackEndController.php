<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Carbon;
use File;
use Illuminate\Database\Eloquent\Model;
use Image;

class BackEndController extends Controller
{

    protected $model;
    protected $limitItem;
    public function __construct(Model $model ,$order_column="id",$order_directio='DESC', $limitItem = 0)
    {
        $this->model = $model;
        $this->limitItem = $limitItem ;
        $this->order_column= $order_column;
        $this->order_direction = $order_directio;
    }

    public function index()
    {
        $rows = $this->model;
        $rows = $this->filter($rows);
        $with = $this->with();
        if (!empty($with)) {
            $rows = $rows->with($with);
        }
        if($this->limitItem != 0)
        $rows = $rows->orderBy($this->order_column, $this->order_direction)->get()->take($this->limitItem);
        else
        $rows = $rows->orderBy($this->order_column, $this->order_direction)->get();

        $moduleName = $this->pluralModelName();
        $sModuleName = $this->getModelName();
        $routeName = $this->getClassNameFromModel();
        $pageTitle = "Control " . $moduleName;
        $pageDes = "Here you can add / edit / delete " . $moduleName;
        // return $rows;
        // return Auth::user()->role;
        return view('back-end.' . $routeName . '.index', compact(
            'rows',
            'pageTitle',
            'moduleName',
            'pageDes',
            'sModuleName',
            'routeName'
        ));
    }

    public function create()
    {
        $moduleName = $this->getModelName();
        $pageTitle = "Create " . $moduleName;
        $pageDes = "Here you can create " . $moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $append = $this->append(null);

        // return  request()->segment(3);
        return view('back-end.' . $folderName . '.create', compact(
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'
        ))->with($append);
    }

    public function destroy($id)
    {
        $this->model->FindOrFail($id)->delete();

        return redirect()->route($this->getClassNameFromModel() . '.index');
    }

    public function edit($id)
    {
        // return Auth::user()->role;
        $row = $this->model->FindOrFail($id);
        $moduleName = $this->getModelName();
        $pageTitle = "Edit " . $moduleName;
        $pageDes = "Here you can edit " . $moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $append = $this->append($row);
        // return $this->model;
        // return $append;
        return view('back-end.' . $folderName . '.edit', compact(
            'row',
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'
        ))->with($append);
    }
    public function getDownload($path)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/download/info.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'filename.pdf', $headers);
    }
    protected function uploadImage($request, $height = 400, $width = 400)
    {

        $photo = $request->file('image');
        $fileName = time() . str_random('10') . '.' . $photo->getClientOriginalExtension();
        $destinationPath = 'uploads/' . $this->getClassNameFromModel() . '/';
        $image = Image::make($photo->getRealPath())->resize($height, $width);
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath);
        }
        $image->save($destinationPath . $fileName);
        return 'uploads/' . $this->getClassNameFromModel() . '/' . $fileName;
    }


    protected function filter($rows)
    {
        return $rows;
    }

    protected function with()
    {
        return [];
    }

    protected function getClassNameFromModel()
    {
        return strtolower($this->pluralModelName());
    }

    protected function pluralModelName()
    {
        return str_plural($this->getModelName());
    }

    protected function getModelName()
    {
        return class_basename($this->model);
    }

    protected function append($row)
    {
        return [];
    }

}
