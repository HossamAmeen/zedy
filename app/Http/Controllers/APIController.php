<?php

namespace App\Http\Controllers;
use App\Http\Controllers\APIResponseTrait;
use App\Models\{Configration, Service,Client,Field, Employee, ClientReview, Media};
use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;

class APIController extends Controller
{
    use APIResponseTrait;
    public function configrations()
    {
        $items = Configration::find(1);
        return $this->APIResponse($items, null, 200);
    }
    public function services($id=null)
    {
        $items = Service::all();
        if(isset($id))
        {
            $items = Service::find($id);
        }
        
        return $this->APIResponse($items, null, 200);

    }

    public function clients($id=null)
    {
        $items = Client::all();
        if(isset($id))
        {
            $items = Client::find($id);
        }
        
        return $this->APIResponse($items, null, 200);

    }

    public function fields($id=null)
    {
        $items = Field::all();
        if(isset($id))
        {
            $items = Field::find($id);
        }
        
        return $this->APIResponse($items, null, 200);

    }
    public function employees($id=null)
    {
        $items = Employee::all();
        if(isset($id))
        {
            $items = Employee::find($id);
        }
        
        return $this->APIResponse($items, null, 200);

    }
    public function client_reviews($id=null)
    {
        $items = ClientReview::all();
        if(isset($id))
        {
            $items = ClientReview::find($id);
        }
        
        return $this->APIResponse($items, null, 200);

    }
    public function videos($id=null)
    {
        $items = Media::where('type', 'video')->get();
        if(isset($id))
        {
            $items = Media::find($id);
        }
        
        return $this->APIResponse($items, null, 200);

    }
    public function contacts(Request $request)  
    {
        
            $rules = $this->contactFormValidation();
            $message = $this->contactMessageValidation();
            $this->validate($request, $rules, $message);
            $data=[
                'email' =>  $request->email,
                'name' => $request->name,

                'subject'=>$request->subject,
                'text'=>$request->text,
            ];
            Mail::send('front-end.contact_mail',$data,function($message) use ($data){

                $message->from( $data['email'] , $data['name']);
                $message->to("info@tibaroyal.com");
                $message->subject($data['subject']);
            });
     

    }


    function contactFormValidation()
    {


        return array(
            'name' => 'required|regex:/^[\pL\s\d\-]+$/u||max:99',

            'email' => 'required|email',

            'text' => 'required|regex:/^[\pL\s\-]+$/u||max:99',

        );
    }

    function contactMessageValidation()
    {
        return array(
            'name.required' => 'هذا الحقل (الاسم) مطلوب ',
            'name.*' => 'هذا الحقل (الاسم) يجب يحتوي ع حروف وارقام فقط',

            'text.required' => 'هذا الحقل (الرساله) مطلوب ',
            'text.*' => 'هذا الحقل (الرساله) يجب يحتوي ع حروف وارقام فقط',

            'email.required' => 'هذا الحقل (البريد) مطلوب ',
            'email.*' => 'هذا الحقل (البريد)يجب ان يكون بريد صحيح',

            'phone.required' => 'هذا الحقل (التلفون) مطلوب ',
            'phone.min' => 'هذا الحقل (التلفون) يجب الا يقل عن 11 رقم ',
            'phone.*' => 'هذا الحقل (التلفون) يجب يحتوي ع ارقام فقط',


        );
    }

}
