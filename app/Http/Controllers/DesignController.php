<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class DesignController extends Controller
{
    public function adddesign(){
    	return view('cd-admin.design.adddesign');
    }

    public function design(){
    	  $car = Design::all();
        return view('cd-admin.design.design',compact('car'));
    }

    public function store(Design $c){
    	$set = $c->insertcontrol();
        $c->store($set);
        return redirect('/alldesign');

    }
     public function delete($id,Design $p)
    {
    $p->remove($id);
    return redirect('/alldesign');
    }

    public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('designs')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('designs')->where('id',$id)->update($a);
        return redirect('/alldesign');
    }
}
