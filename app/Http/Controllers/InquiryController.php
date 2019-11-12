<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class InquiryController extends Controller
{
    public function index(){
    	 $c=DB::table('inquiries')->orderBy('id','Desc')->paginate(10);
    	return view('cd-admin.inquiry.inquiry',compact('c'));
    }
public function reply(){
		$d=DB::table('inquiry_replies')->orderBy('id', 'DESC')->paginate(10);
		return view('cd-admin.inquiry.viewreply',compact('d'));	
	}


	public function replyform($id){
		$n=DB::table('inquiries')->where('id',$id)->get()->first();
		return view('cd-admin.inquiry.inreply',compact('n'));
	}
    public function store(){

    	$data = request()->validate([
    		
    		'email' => 'required|email',
    		
    	]);
  

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('inquiries')->insert($final);
      	return redirect('/');
  }

  public function storereply($id){
  	 $data = request()->validate([
            'email' => 'required|email',
            'subject' => 'required|',
            'message' => 'required',
            'status' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $a['contact_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('inquiry_replies')->insert($final);
        Mail::to($data['email'])->send(new InquiryMail($data));
        
        return redirect('/inquiryreplies');
       
  }

  public function deleteinbox($id){
  	$test = DB::table('contacts')->where('id',$id)->get()->first();
    	
    	DB::table('inquiries')->where('id',$id)->delete();
    	Session::flash('deletesuccess');
    	return redirect('/viewinquiry');
  }
public function deletereply($id){
  	$test = DB::table('inquiry_replies')->where('id',$id)->get()->first();
    	
    	DB::table('inquiry_replies')->where('id',$id)->delete();
    	Session::flash('deletesuccess');
    	return redirect('/inquiryreplies');
  }
    
}
