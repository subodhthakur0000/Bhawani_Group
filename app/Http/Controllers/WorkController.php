<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
class WorkController extends Controller
{
    use imageTrait;
    public function add(){
    	return view('cd-admin.work.addwork');
    }
     public function work(){
        $car = work::all();
        return view('cd-admin.work.work',compact('car'));
    }
    public function store(Work $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);
        return redirect('/work');
    }
      public function delete($id,Work $p)
    {
    $p->remove($id);
    return redirect('/work');
    }


public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('works')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('works')->where('id',$id)->update($a);
        return redirect('/work');
    }
    
}
