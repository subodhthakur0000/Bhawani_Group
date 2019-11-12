<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Carbon\Carbon;
class Section extends Model
{
    protected $guarded=[];
     public function store($set)
	{
		$a=[];
	
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($set,$a);
        //dd($replace);
        DB::table('sections')->Insert($replace);
        Session::flash('success');
	}
	  public function edit($data,$id)
    {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
        DB::table('sections')->where('id',$id)->update($replace);
   		 
   		 Session::flash('updatesuccess');
	}

	public function remove($id)
  {
    $test = DB::table('sections')->where('id',$id)->get()->first();
      
      DB::table('sections')->where('id',$id)->delete();
      Session::flash('deletesuccess');
  }
	public function insertcontrol()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'title' => 'required',
    	'description' => 'required',
    	'status'=>'required',
    			]);
  		return $data;
	}

}
