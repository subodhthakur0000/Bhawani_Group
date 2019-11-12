<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\About;
use App\Article;
use App\Carousel;
use App\Teams;
use App\Testonomial;
use App\Design;


class FrontendController extends Controller
{
    public function about(){
    	$seo=DB::table('seos')->where('name','About')->get()->first();
    	$getabouts=DB::table('abouts')->get();
    	$getteams=DB::table('teams')->where('status','active')->get();
    	$getclients=DB::table('clients')->where('status','active')->get();
    	$section=DB::table('sections')->where('status','active')->get();
    	return view('frontend.pages.about',compact('getabouts','getteams','getteams','getclients','section','seo'));
    }


    public function testimonial(){
    	$gettestimonials=DB::table('testonomials')->where('status','active')->get();
    	$seo =DB::table('testonomials')->where('status','active')->orderBy('id','desc')->take(1)->get();
    	return view('frontend.pages.testimonial',compact('gettestimonials','seo'));
    }

    public function design(){
    	$getdesigns=DB::table('designs')->where('status','active')->get();
    	$getabouts=DB::table('abouts')->get();
    	$seo = DB::table('seos')->where('name','Design')->get()->first();
    	return view('frontend.pages.design',compact('getdesigns','seo','getabouts'));
    }

    public function contact(){
		
		$contact = DB::table('contacts')->get();
		
		return view('frontend.pages.contact',compact('contact'));
	}
	public function home(){
		$seo = DB::table('seos')->where('name','Home')->get()->first();

        $getonecarosels =Carousel::where('status','active')->orderBy('id','desc')->get()->first();
         
		$getcarosels =Carousel::where('id','!=',$getonecarosels['id'])->where('status','active')->orderBy('id','desc')->get();

    	

		$getservices=DB::table('services')->where('status','active')->orderBy('id','desc')->take(4)->get();
		$getourworks=DB::table('works')->where('status','active')->get();

		$getclients=DB::table('testonomials')->where('status','active')->take(1)->get();
		$getclientviews =DB::table('testonomials')->where('status','active')->orderBy('id','desc')->take(8)->get();
		$getblogs =DB::table('articles')->where('status','active')->orderBy('id','desc')->take(3)->get();
			return view('frontend.home.home',compact('getcarosels','getonecarosels','getservices','getourworks','getclients','getblogs','getclientviews','seo'));
	}

		 public function index(){
    	$getservices =DB::table('services')->where('status','active')->get();
    	return view('frontend.pages.service',compact('getservices'));
    	}
			public function servicedetails($id){
    		$servicedetails=DB::table('services')->where('id',$id)->where('status','active')->get();
      
      		return view('frontend.pages.service-detail',compact('servicedetails'));

    }
    public function article(){
    		$seo = DB::table('seos')->where('name','Article')->get()->first();
			$getarticles =DB::table('articles')->where('status','active')->orderBy('id','desc')->take(6)->get();
    	return view('frontend.pages.article',compact('getarticles','seo'));
    }

    public function articledetails($id){
    	$getarticledetails=DB::table('articles')->where('id',$id)->where('status','active')->get();
      
      return view('frontend.pages.article-detail',compact('getarticledetails'));

    }
	
}
