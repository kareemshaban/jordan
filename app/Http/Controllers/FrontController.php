<?php

namespace App\Http\Controllers;

use App\Models\AboutHeader;
use App\Models\AboutSection;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\BlogSection;
use App\Models\Clients;
use App\Models\ContactHeader;
use App\Models\ContactInfo;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Opinion;
use App\Models\Service;
use App\Models\ServiceHeader;
use App\Models\SiteAnalysis;
use App\Models\Slide;
use App\Models\Statistics;
use App\Models\TeamSection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class FrontController extends Controller
{
    public function index(Request $request){

        $this -> visitRecord($request);

        $slides = Slide::all();
        $header = Header::all() -> first() ;
        $blogSection = BlogSection::all() -> first() ;
        $blogs = Blog::all();
        $statitctis = Statistics::all() -> first();
        $aboutSection = AboutSection::all() -> first();
        $clients = Clients::all();
        $opinions = Opinion::all();
        $footer = Footer::all() -> first();
        return view('welcome' , compact('slides' , 'header' , 'blogSection' , 'blogs' , 'statitctis' , 'aboutSection' ,'clients' , 'opinions' , 'footer'));
    }
    public function about(Request $request){
      //  $this -> visitRecord($request);
        $header = Header::all() -> first() ;
        $footer = Footer::all() -> first();
        $aboutHeader = AboutHeader::all() -> first();
        $statitctis = Statistics::all() -> first();
        $opinions = Opinion::all();
        $aboutData  = AboutUs::all() -> first();
        $team = TeamSection::all();
        return view('about' , compact('header' , 'footer' , 'aboutHeader' , 'statitctis' , 'opinions' , 'aboutData' , 'team'));
    }
    public function contact(Request $request){
     //   $this -> visitRecord($request);
        $header = Header::all() -> first() ;
        $footer = Footer::all() -> first();
        $clients = Clients::all();
        $contactHeader = ContactHeader::all() -> first();
        $contactInfo = ContactInfo::all() -> first();
        return view('contact' , compact('header' , 'footer' , 'clients' , 'contactHeader' , 'contactInfo'));
    }
    public function services(Request $request){
      //  $this -> visitRecord($request);
        $header = Header::all() -> first() ;
        $footer = Footer::all() -> first();
        $serviceHeader = ServiceHeader::all() -> first();
        $clients = Clients::all();
        $services = Service::all();

        return view('services' , compact('header' , 'footer' , 'clients' , 'serviceHeader' , 'services'));
    }

    public function getBlog($id){
        $blog = Blog::find($id);
        $header = Header::all() -> first() ;
        $footer = Footer::all() -> first();
        return view('blog' , compact('blog' , 'header' , 'footer'));
    }


    public function visitRecord(Request $request){
       // $ip = $request -> ip();
        $ip = '48.188.144.248';
        $currentUserInfo = Location::get($ip);

        $data = SiteAnalysis::where('ip' , '=' , $ip) -> get();
        if(count($data) == 0){
            SiteAnalysis::create([
                'ip' => $ip,
                'country' => $currentUserInfo->countryName ,
                'last_visit' => strval(Carbon::now())  ,
                'visit_count' => 1
            ]);
        } else {
            $visit = $data[0];
            $visit -> update([
                'last_visit' => strval(Carbon::now())  ,
                'visit_count' => ($visit ->visit_count)  + 1
            ]);
        }
    }
}
