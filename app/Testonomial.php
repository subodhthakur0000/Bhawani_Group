<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Carbon\Carbon;


class Testonomial extends Model
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
        DB::table('testonomials')->Insert($replace);
        Session::flash('success');
	}

	 public function remove($id)
  {
    $test = DB::table('testonomials')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('testonomials')->where('id',$id)->delete();
      Session::flash('deletesuccess');
  }

  public function edit($data,$id)
    {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
        DB::table('testonomials')->where('id',$id)->update($replace);
   		 
   		 Session::flash('updatesuccess');
	}

	 public function validationinserta()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'name' => 'required',
      'image'=>'',
    	'description' => 'required',
    	'altimage' => 'required',
    	'status' => 'required',
    	'seotitle'=>'required',
    	'seodescription'=>'required',
    	'keywords'=>'required',
		]);
  		return $data;
	}

	public function insertcontrol()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
    	'image' => 'required|image',
    	'altimage' => 'required',
    	'status' => 'required',
    	'seotitle'=>'required',
    	'seodescription'=>'required',
    	'keywords'=>'required',

		]);
  		return $data;
	}
}
