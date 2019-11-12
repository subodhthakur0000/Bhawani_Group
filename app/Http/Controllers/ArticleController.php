<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class ArticleController extends Controller
{ use imageTrait;
    public function addarticle(){
    	return view('cd-admin.article.addarticle');
    }

    public function store(Article $c)
    {

        $set = $c->insertcontrol();
        $c->store($set);
        return redirect('/viewarticle');
    }
    public function article(){
    	$art=DB::table('articles')->get()->all();
    	return view('cd-admin.article.article',compact('art'));
    }
    public function updateart($id,Article $p){
		$data = $p->updatevalidation();
	    $p->edit($data,$id);
  		return redirect('/viewarticle');

	}


     public function delete($id,Article $p)
    {
    $p->remove($id);
    return redirect('/viewarticle');
    }

    public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('articles')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('articles')->where('id',$id)->update($a);
        return redirect('/article');
    }

}
