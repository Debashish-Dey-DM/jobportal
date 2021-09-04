<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SeekController extends Controller
{
     public function jobs(){
         $job = DB::table('jobs')->where('type','1')->get();
        return view('Jobseeks.ApplyJob')
            ->with('Joblist',$job);  
    }
    public function applyJob($id,$type){
        $job = DB::table('jobs')->where('id',$id)
        ->where('type','1')->get();
    return view('Jobseeks.UploadCV')
    ->with('job', $job);
    
}
  public function CvUpdate(Request $req,$id){
         $file = $req->file('CV_file');
            $file_name=$file->getClientOriginalName();
            $file_ext=$file->getClientOriginalExtension();
            $file_new_name =strtoupper(Str::random(6));
            $file_full_name=$file_new_name.'.'.$file_ext;
            $upload_path='files/CV/';
            $file_url=$upload_path.$file_full_name;
            $success=$file->move($upload_path,$file_full_name);
            $fileData='/files/CV/'.$file_full_name;  
             $data=array();
             $data['cv']=$fileData;
             $data['job_id']=$id;
              $data['user_id'] = $req->session()->get('id');
              
            $insert_cv = DB::table('cvs')->insert($data);
            if($insert_cv){
                return redirect()->back();
            }
            else{
                echo "Sorry I am failed";
            }
    }

}
