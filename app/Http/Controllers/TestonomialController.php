<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testonomial;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class TestonomialController extends Controller
{

    public function addtestonomial(){
    	return view('cd-admin.testonomials.addtestonomial');
    }

    public function testonomial(){
    	$re=DB::table('testonomials')->paginate(6);
		
        return view('cd-admin.testonomials.testonomial',compact('re'));
    }

    public function store(Testonomial $c){
    	$set = $c->insertcontrol();
        $c->store($set);
        return redirect('/testonomial');

    }

   public function update($id,Testonomial $p)
	 {
		$data = $p->validationinserta();
	    $p->edit($data,$id);
  		return redirect('/testonomial');

	}
    public function delete($id,Testonomial $p)
    {
    $p->remove($id);
    return redirect('/testonomial');
    }
    public function status($id)
		{
		$a = [];
		$test = DB::table('testonomials')->where('id',$id)->get()->first();
		if($test->status=='active')
		{
			$a['status'] = 'inactive';
		}
		else
		{
			$a['status'] = 'active'; 
		}
		DB::table('testonomials')->where('id',$id)->update($a);
		return redirect('/testonomial');
	}
}
