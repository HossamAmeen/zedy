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

        return $this->APIResponse($item, null,200 );
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
        return $this->APIResponse($items, null, 200 );

    }

    public function clients($id=null)
    {
        $items = Client::with('field')->orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = Client::find($id);
        }

        return $this->APIResponse($items, null,200 );

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

        return $this->APIResponse($items, null,200 );

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

        return $this->APIResponse($items, null,200 );

    }
    public function client_reviews($id=null)
    {
        $items = ClientReview::with('field:id,name,ar_name')->orderBy('item_order')->get();
        if(request('limit'))
            $items = $items->take(request('limit'));
        if(isset($id))
        {
            $items = ClientReview::find($id);
        }

        return $this->APIResponse($items, null,200 );

    }
    public function media($id=null)
    {
       
        if(isset($id))
            {
                $data['item'] = Media::find($id);
                $data['items'] = Media::where('type', $data['item']->type)->where('id', '!=', $id)->orderBy('item_order')->get()->take(3);
                return $this->APIResponse($data, null, 200);
            }
        $items = Media::where('type', request("type"))->orderBy('item_order', 'DESC')->paginate(request('limit') ?? 20);
        return $this->APIResponsePagination($items, null, 200);
        
        return $this->APIResponse($items, null, 200);
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

        return $this->APIResponse($items, null,200 );
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
