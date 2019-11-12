<?php

namespace App\Http\Controllers;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
class SectionController extends Controller
{
    public function addsection(){
    	return view('cd-admin.section.addsection');
    }
    public function show(){
    	$sec=DB::table('sections')->get()->all();
    	return view('cd-admin.section.section',compact('sec'));
    }
    public function store(Section $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);
        return redirect('/section');
    }
     public function update($id,Section $p)
	 {
		$data = $p->insertcontrol();
	    $p->edit($data,$id);
  		return redirect('/section');

	}

	public function delete($id,Section $p)
    {
    $p->remove($id);
    return redirect('/section');
    }


	 public function statusupdate($id)
		{
		$a = [];
		$test = DB::table('sections')->where('id',$id)->get()->first();
		if($test->status=='active')
		{
			$a['status'] = 'inactive';
		}
		else
		{
			$a['status'] = 'active'; 
		}
		DB::table('sections')->where('id',$id)->update($a);
		return redirect('/section');
	}
}
