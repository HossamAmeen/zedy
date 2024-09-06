<?php


namespace App\Http\Controllers;

trait APIResponseTrait
{
    public function APIResponse($data = null , $error = null , $code = 200)
    {
        $array = [
          
            'data' => $data ,
            'status' => in_array($code , [200 , 201 , 202]) ? "success" : "falied" ,
            'error' => $error,
        ];

        return response($array , $code);
    }
    public function APIResponsePagination($data = null , $error = null , $code = 200)
    {
        $response_custom = collect([
            'status' =>  in_array($code , [200 , 201 , 202]) ? "success" : "falied" ,
            'error' => $error,
        ]);
        $array = $response_custom->merge($data);
        // $array = [
        //     'data' => $data ,
        //     'status' => in_array($code , [200 , 201 , 202]) ? "success" : "falied" ,
        //     'error' => $error,
        // ];

        return response($array , $code);
    }
}
