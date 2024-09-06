<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Project;
use App\Models\Gallery;
use App\Models\Question;
use App\Models\Media;
use App\Models\Service;
use App\Models\{Unit,ContactUs};
use App\Models\Operation;
use Mail;
class HomeController extends Controller
{
    protected $lang;  
    public function __construct()
    {
        $this->lang = "ar";
        if(  request()->segment(1) == "ar" ) {
            $this->lang = "ar";
        }
        else if(request()->segment(1) == "en")
            $this->lang = request()->segment(1);
        else
        
        return redirect()->route('home', ['lang' => 'ar']);       
    }
    public  function  change_language($lang){
        $prefUrl = url()->previous() ; 
        $rout = null;
        if(strrpos($prefUrl, 'ar',-1) === false && strrpos($prefUrl, 'en') === false){
            $rout = $rout . $lang;

        }else{
            if($lang == "en")
            $rout =   str_replace("/ar","/en",url()->previous());
            else if($lang == "ar"){
             $rout =   str_replace("/en","/ar",url()->previous());
            }
        }
       
        //  if( $rout == $prefUrl){
        //      $rout = $rout . $lang;
        //  }
         return redirect($rout);
     }

     public function index()
     {
        return redirect()->route('home');
     }
     
    public function home()
    {
        if( $this->lang  == "en" ){

            $pageTitle  = "Home";
            $news = News::all()->sortByDesc("item_order")->where('title','!=',null)->take(4);
            $projects = Project::all()->sortByDesc("item_order")->where('name','!=',null)->take(8);
        }
        else
        {
            $pageTitle = "الرئيسيه";
            $news = News::all()->sortByDesc("item_order")->where('ar_title','!=',null)->take(4);
            $projects = Project::all()->sortByDesc("item_order")->where('ar_name','!=',null)->take(8);

        }
        return view("front-end.$this->lang.index" , compact('pageTitle' , 'news', 'projects'));
    }

    public function news()
    {
        if( $this->lang  == "en" ){

            $pageTitle  = "news";
            $news = News::where('title','!=',null)->orderBy('item_order', 'DESC')->paginate(6);
        }
        else
        {
            $pageTitle = "الاخبار";
            $news = News::where('ar_title','!=',null)->orderBy('item_order', 'DESC')->paginate(6);

        }
        return view("front-end.$this->lang.news" , compact('pageTitle' , 'news'));
    }

    public function show_news($lang, $id)
    {
        $news_item = News::find($id);
        if( $this->lang  == "en" ){

            $pageTitle  = $news_item->title;
            $news = News::where('ar_title','!=',null)->paginate(4);
            $related_news = News::all()->sortByDesc("item_order")->where('title','!=',null)
                                                  ->where('id','!=',$id)
                                                  ->take(2);
            $projects = Project::all()->sortByDesc("item_order")
                                      ->where('name','!=',null)
                                      ->where('id','!=',$id)
                                      ->take(4);
        }
        else
        {
            $pageTitle = $news_item->ar_title;
            $news = News::where('ar_title','!=',null)->paginate(4);
            $related_news = News::all()->sortByDesc("item_order")->where('ar_title','!=',null)
                                                  ->where('id','!=',$id)
                                                  ->take(2);
            $projects = Project::all()->sortByDesc("item_order")
                                      ->where('id','!=',$id)
                                      ->where('ar_name','!=',null)
                                      ->take(4);
        }
        return view("front-end.$this->lang.news_details" , compact('pageTitle' , 'news','news_item','projects','related_news'));
    }

    public function projects()
    {
        if( $this->lang  == "en" ){

            $pageTitle  = "projects";
            $projects = Project::where('name','!=',null)->orderBy('item_order', 'DESC')->paginate(6);
        }
        else
        {
            $pageTitle = "المشاريع";
            $projects = Project::where('ar_name','!=',null)->orderBy('item_order', 'DESC')->paginate(6);

        }
        return view("front-end.$this->lang.projects" , compact('pageTitle' , 'projects'));
    }

    public function project($lang, $id)
    {
        $project = Project::find($id);
        $news = News::where('project_id', $id)->orderBy('item_order', 'DESC')->paginate(4);
        if($project == null){
            
            return redirect()->route('home', ['lang' => $this->lang]);
            
        }
        $images = Media::all()->sortByDesc("id")->where('type','image')->where('project_id',$id);
        if( $this->lang  == "en" ){
            $pageTitle  = $project->name;
            $units = Unit::all()->sortByDesc("id")->where('project_id',$id);
           
        }
        else
        {
            $pageTitle = $project->ar_name;
           
            $units = Unit::all()->sortByDesc("id")->where('project_id',$id);
        }
        return view("front-end.$this->lang.project" , compact('pageTitle' , 'project' , 'units' , 'news','images'));
    }
    public function unit($lang, $id)
    {
        $unit = Unit::find($id);
        $images = Media::all()->sortByDesc("id")->where('type','image')->where('project_id',$id);
        if( $this->lang  == "en" ){
            $pageTitle  = $unit->project->name??"";
        }
        else
        {
            $pageTitle = $unit->project->name??"";
        }
        return view("front-end.$this->lang.unit" , compact('pageTitle' ,'unit'));
    }
    public function media()
    {
        $media = Media::get()->where('type','videos')->orderby("id", "DESC")->take(10);
        if( $this->lang  == "en" ){
            $pageTitle  = "media";
        }
        else
        {
            $pageTitle = "المركز الاعلامي";
        }
        // return $media;
        return view("front-end.$this->lang.media" , compact('pageTitle' , 'media'));
    }
    public function contact_us(Request $request)
    {
        ContactUs::create($request->all());
        session()->flash('action', ' تم الارسال بنجاح سنقوم بالتواصل معك في اقرب وقت');
        return redirect(url()->previous() . '#contact-us');
        return  redirect()->back();
    }
    public function about_us()
    {
        if( $this->lang  == "en" ){
            $pageTitle  = 'about-us';
        }
        else
        {
            $pageTitle = 'من نحن';
            

        }
        return view("front-end.$this->lang.about-us" , compact('pageTitle'));
    }
    
    public function search()
    {
        $projects = project::query();
        $units = Unit::query();
        if( $this->lang  == "en" ){
        
            if(request('payment_type') != null)
            {
                $searchString = request('payment_type');
                $units = $units->whereHas('project', function ($query) use ($searchString){
                    $query->where('payment_type', 'like', '%'.$searchString.'%');
                });
            }
            if(request('type') != null)
            {
                $searchString = request('type');
                // $units = $units->whereHas('project', function ($query) use ($searchString){
                //     $query->where('project_type', 'like', '%'.$searchString.'%');
                // });
                $units = $units->where('ar_project_type', 'like', '%'.$searchString.'%');
                
            } 
            $pageTitle = "search" ;
        }
        else{
            if(request('type') != null)
            {
                $searchString = request('type');
                $units = $units->where('ar_project_type', 'like', '%'.$searchString.'%');
            } 
            if(request('payment_type') != null)
            {
                $searchString = request('payment_type');
                $units = $units->whereHas('project', function ($query) use ($searchString){
                    $query->where('ar_payment_type', 'like', '%'.$searchString.'%');
                });
            }
          
            $pageTitle = "بحث" ;
        }
       
        if(request('space_from')){
            $units =  $units->where('space' ,'>=',request('space_from'));
        }

        if(request('space_to')){
            $units =  $units->where('space' ,'<=',request('space_to'));
        }
        $units = $units->orderby("id", "DESC")->get();
        // return $units;
        return  view("front-end.$this->lang.search" , compact('pageTitle', 'projects','units') );
    }
}
