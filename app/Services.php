<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
class Services extends Model
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
        DB::table('services')->Insert($replace);
        Session::flash('success');
	}

	public function insertcontrol()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    		'image' => 'mimes:png,PNG,jpg,JPEG,JPG,jpeg',
			'altimage' => 'required',
			'title' => 'required',
			'status'=>'required',
			'description' => 'required',
			'seotitle' => 'required',
			'seokeyword' =>'required',
			'seodescription' => 'required',
			]);
  		return $data;
	}
}
