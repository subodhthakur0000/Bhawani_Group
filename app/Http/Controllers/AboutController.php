<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\About;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\DB;
use Session;

class AboutController extends Controller
{
	use imageTrait;
    public function addabout(){
    	return view('cd-admin.about.aboutform');
    }

    public function store(){
        $request = Request()->all();
        $v = $this->validateRequest();
        $about = new About;
        $img = $this->insertimage($request['image']);
        $about['image']= $img;
        $about['altimage'] = $request['alt'];
        $about['description'] = $request['description'];
        $aimg = $this->insertimage($request['aboutimage']);
        $about['aboutimage']=$aimg;
        $about['altimageabout'] = $request['aboutalt'];
         //dd($about);
        $about->save();

         return redirect('/aboutdetail');
    }

    public function show(){
        $d= DB::table('abouts')->get()->first();
        return view('cd-admin.about.aboutshow',compact('d'));
    }

    public function update()
    {
        $request = Request()->all();
        $v = $this->updaterequest();
        $about = About::get()->first();
        $about['description'] = $request['description'];
        
        
        $about->save();
          Session::flash('updatesuccess');
        return redirect('/aboutdetail');
        }

             public function updaterequest(){
        return Request()->validate([
            'description' => 'required',
            
        ]);
    }



















      public function validateRequest(){
        return Request()->validate([
            'alt' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'aboutimage'=>'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'aboutalt'=>'required',
        ]);
    }
}
