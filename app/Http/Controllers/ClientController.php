<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class ClientController extends Controller
{
    use imageTrait;
    public function client(){
        $car = Client::all();
        return view('cd-admin.clients.clients',compact('car'));
    }
      
    public function add(){
         return view('cd-admin.clients.addclients');
    }


   public function store(Client $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);
        return redirect('/clients');
    }
    
    public function delete($id,Client $p)
    {
    $p->remove($id);
    return redirect('/clients');
    }


public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('clients')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('clients')->where('id',$id)->update($a);
        return redirect('/clients');
    }
    
    

}
