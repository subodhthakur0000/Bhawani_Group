<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use Session;
use Carbon\Carbon;
use App\Mail\QuickMail;
Use App\Article;
use App\Client;
use App\Team;
use App\Users;
Use App\Testonomial;
class DashboardController extends Controller
{
    public function dashboard(){
    	$art=DB::table('articles')->get();
        $article=count($art);
        $test=DB::table('testonomials')->get();
        $testimonial=count($test);
		$cl=DB::table('clients')->get();
        $clients=count($cl);
        $t=DB::table('teams')->get();
        $teams=count($t);     
        $mail =	DB::table('quickmails')->orderBy('id', 'DESC')->take(5)->get();
        $user=DB::table('users')->orderBy('id','DESC')->get()->first();  
    	return view('cd-admin.home.home',compact('article','testimonial','clients','teams','mail','user'));
    }
    public function quickmail(){
   $data = request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('quickmails')->insert($final);
        Mail::to($data['email'])->send(new QuickMail($data));
        Session::flash('success');

      	return redirect('/dashboard');
    }

     public function view(){
    	$t =	DB::table('quickmails')->orderBy('id', 'DESC')->paginate(10);
    	return view('cd-admin.home.mails',compact('t'));
    }

    public function del($id){
    	 DB::table('quickmails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }


}
