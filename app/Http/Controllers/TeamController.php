<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class TeamController extends Controller
{
    use imageTrait;
    public function team(){
        $car = Team::all();
        return view('cd-admin.teams.teams',compact('car'));
    }
      
    public function add(){
         return view('cd-admin.teams.addteams');
    }


   public function store(Team $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);
        return redirect('/team');
    }
    
    public function delete($id,Team $p)
    {
    $p->remove($id);
    return redirect('/team');
    }

   public function update($id,Team $p)
     {
        $data = $p->validationinserta();
        $p->edit($data,$id);
        return redirect('/team');

    }


public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('teams')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('teams')->where('id',$id)->update($a);
        return redirect('/team');
    }
    
    

}
