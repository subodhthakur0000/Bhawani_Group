<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Traits\imageTrait;
use DB;
use App\Services;
use Session;
use Carbon\Carbon;

class ServiceController extends Controller
{
	use imageTrait;
   public function addservice(){
		return view('cd-admin.service.addservice');
	}

	public function viewservice()
	{
		$ser = DB::table('services')->get();
		return view('cd-admin.service.viewservice',compact('ser'));
	}

	public function store(Services $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);

        return redirect('/allservice');
    }

    public function edit($id){
    if($ser = Services::where('id',$id)->get()->first()){
        return view('cd-admin.service.editservice',compact('ser'));
    }
}

public function update($id)
{  
   $services = DB::table('services')->where('id',$id)->get()->first();
    $a = [];
    $a['updated_at']=Carbon::now('Asia/Kathmandu');
    $data = $this->insertcontrol();
    if(Input::hasFile('image'))
    {
        if (file_exists('imageupload/'.$services->image)) 
        {
            unlink('imageupload/'.$services->image);
        }
        $img = $this->insertimage($data['image']);
        $a['image'] = $img;        
        $final = array_merge($data,$a);
        $services = DB::table('services')->where('id',$id)->Update($final);
    }
else
    {
         $final = array_merge($data,$a);
        $services=DB::table('services')->where('id',$id)->Update($final);
    }
    Session::flash('updatesuccess');
    return redirect()->to('/allservice');

}


    public function sup($id)
  {
    $a = [];
    $test = DB::table('services')->where('id',$id)->get()->first();
    if($test->status=='active')
    {
      $a['status'] = 'inactive';
    }
    else
    {
      $a['status'] = 'active'; 
    }
    DB::table('services')->where('id',$id)->update($a);
    return redirect('/allservice');
  }
public function delete($id){

   $services = DB::table('services')->where('id',$id)->get()->first();
 
   if (file_exists('imageupload/'.$services->image)) 
        {
            unlink('imageupload/'.$services->image);
    }
    DB::table('services')->where('id',$id)->delete();
    Session::flash('deletesuccess');
   return redirect()->to('/allservice');
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
