<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Carbon\Carbon;


class Article extends Model
{
   use imageTrait;
    protected $guarded=[];
    
    public function store($set)
	{
		$a=[];
		$test = $this->insertimage($set['image']);
		$a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($set,$a);
        //dd($replace);
        DB::table('articles')->Insert($replace);
        Session::flash('success');
	}
	public function edit($data,$id)
    {
        if(Input::hasFile('image'))
        {
         $test = DB::table('articles')->where('id',$id)->get()->first();
         if (file_exists('imageupload/'.$test->image)) 
         {
             unlink('imageupload/'.$test->image);
         }
         
         $test = $this->addimage($data['image']);
         $a['image'] = $test ;
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         $data = DB::table('articles')->where('id',$id)->update($replace);
    	 }
    	 else
    	 {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         
        DB::table('articles')->where('id',$id)->update($replace);
   		 }
   		 Session::flash('updatesuccess');
	}

	public function remove($id)
  {
    $test = DB::table('articles')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('articles')->where('id',$id)->delete();
      Session::flash('deletesuccess');
  }


	public function insertcontrol()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'title' => 'required',
    	'description' => 'required',
    	'seotitle'=>'required',
    	'keywords'=>'required',
    	'seodescription'=>'required',
    	'image' => 'required|image',
    	'altimage' => 'required',
    	'status' => 'required',
		]);
  		return $data;
	}
	public function updatevalidation()
	{
		 $data =  Request()->validate([
    	'title' => 'required',
    	'description' => 'required',
    	'seotitle'=>'required',
    	'keywords'=>'required',
    	'seodescription'=>'required',
    	'altimage' => 'required',
    	'status' => 'required',
    	'image' => '',
		]);
  		return $data;
	}
 
}
