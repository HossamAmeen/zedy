<?php

namespace App\Http\Controllers;
use App\Http\Controllers\APIResponseTrait;
use App\Models\{Configration, Service,Client,Field, Employee, ClientReview, Media, Job};
use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;

class APIController extends Controller
{
    use APIResponseTrait;
    public function configrations()
    {
        $item = Configration::find(1);
        $item->{"clients_count"} = Client::get()->count();
        $item->{"team_count"} = Employee::get()->count();
        $item->{"videos_count"} = Media::where('type', 'video')->get()->count();
        $item->{"fields_count"} = Field::get()->count();
        if ($language=="ar")
            $pageTitle = "الرئيسية";
        else
            $pageTitle = "";
        return $this->APIResponse($item, null,200 , $pageTitle);
    }
    public function services($id=null, Request $request)
    {
        $items = Service::orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = Service::find($id);
        }
        $language = request()->header('Accept-language');
        if ($language=="ar")
            $pageTitle = "الخدمات";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null, 200 , $pageTitle);

    }

    public function clients($id=null)
    {
        $items = Client::orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = Client::find($id);
        }
        if ($language=="ar")
            $pageTitle = "عملاؤنا";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null,200 , $pageTitle);

    }

    public function fields($id=null)
    {
        $items = Field::orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = Field::find($id);
        }
        if ($language=="ar")
            $pageTitle = "";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null,200 , $pageTitle);

    }
    public function employees($id=null)
    {
        $items = Employee::orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = Employee::find($id);
        }
        if ($language=="ar")
            $pageTitle = "من نحن";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null,200 , $pageTitle);

    }
    public function client_reviews($id=null)
    {
        $items = ClientReview::with('field:id,name,ar_name')->orderBy('item_order')->get();;
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = ClientReview::find($id);
        }
        if ($language=="ar")
            $pageTitle = "";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null,200 , $pageTitle);

    }
    public function media($id=null)
    {
        $items = Media::where('type', request("type"))->orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if ($language=="ar")
            $pageTitle = "";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null,200 , $pageTitle);

    }
    public function jobs($id=null)
    {
        $items = Job::get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = Job::find($id);
        }
        if ($language=="ar")
            $pageTitle = "";
        else
            $pageTitle = "";
        return $this->APIResponse($items, null,200 , $pageTitle);
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




}
