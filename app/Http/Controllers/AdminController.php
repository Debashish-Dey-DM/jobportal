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

class AdminController extends Controller
{
    //Index
     public function JobPosterDashboard(){
        
         return view('JobPost.JobPoster');
            
           
    }
     public function jobs(Request $req){
         $id = $req->session()->get('id');   
         $job = DB::table('jobs')
          ->leftJoin('userinfos', 'jobs.job_created', '=', 'userinfos.id')
          ->select('jobs.*', 'userinfos.username')
         
         ->where('job_created',$id)
         ->get();
         
        return view('JobPost.joblist')
            ->with('Joblist',$job);  
    }
      public function createjobs(Request $req){
            // $req->session()->get('id');    
            $data=array();
            $data['job_title']=$req->job_title;
            $data['job_responsibilities']=$req->job_responsibilities;
            $data['job_requirements']=$req->job_requirements;
            $data['job_salary']=$req->job_salary;
            $data['job_location']=$req->job_location;
            $data['cv_count']='0';
            $data['type']='1';
            $data['job_created']= $req->session()->get('id');   

            

            $insert_event = DB::table('jobs')->insert($data);
            if($insert_event){
                return redirect()->route('AllJobList');
            }else{
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'Something going wrong'
                ]);
            }
         
            
           
    }
    public function Name(){
        
         return view('JobPost.companyName');
            
           
    } public function UpdateName(Request $req){
        $id=$req->session()->get('id');
        //   return view('JobPost.companyName');
        // echo $id;
        $data=array();
        $data['Company_Name']=$req->input('Company_Name');
        $update= DB::table('userinfos')
                            ->where('id',$id)
                            ->update($data);   
        if ($update) {
               return redirect()->route('AllJobList');
            }
           
    }
    public function allCv(Request $req,$id){
        $cv = DB::table('cvs')
        ->leftJoin('jobs', 'cvs.job_id', '=', 'jobs.id')
        ->leftJoin('userinfos', 'cvs.user_id', '=', 'userinfos.id')
        ->select('cvs.*', 'jobs.job_title','userinfos.username')
        ->where('jobs.id',$id)
        ->get();
        return view('JobPost.allCVs')
            ->with('cvList',$cv);  
    }
    
    
    
    
}
