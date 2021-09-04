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

class HomeController extends Controller
{
     public function Loginindex(Request $request){
        session_start();

        if($request->session()->has('username')){
            if($request->session()->get('type') == 1){
              return redirect('/joblist');
            }elseif($request->session()->get('type') == 0){
                return redirect('/ApplyJob');
            }else{
                return view('signin');
            }
        }else{
            return view('signin');
        }
     }
    public function index(Request $req){
         $password=md5($req->input('password'));

            $user=DB::table('userinfos')
            ->where('email',$req->input('email'))
            ->where('status',1)
            ->first();
     if($user){
         if($user->password == $password){
        $req->session()->put('id',$user->id);
        $req->session()->put('username',$user->username);
        $req->session()->put('email',$user->email);
        $req->session()->put('phone',$user->phone);
        $req->session()->put('type',$user->type);
        $req->session()->put('status',$user->status);
        $req->session()->put('Company_Name',$user->Company_Name);
        if($user->type == 1){
            if($user->Company_Name==Null){
                 return redirect('/companyName');
            }
        return redirect('/joblist');
                    }
        }
        else{
             return redirect('/wrongIdPass');
        }
        if($user->type == 0){
        return redirect('/ApplyJob');
                    
        }
     }
     else{
          return redirect('/wrongIdPass');
        }
    }
     public function createNewUser(Request $req){
            $username = $req->input('username');
            $email = $req->input('email');
            
            $user=DB::table('userinfos')
            ->where('email',$req->input('email'))
            ->orWhere('username',$req->input('username'))
            ->first();     
            if($user == null){
                
               $data=array();
                
                $data['username']=$req->input('username');
                $data['password']=md5($req->input('password'));
                $data['email']=$req->input('email');
                $data['phone']=$req->input('phone');
                $data['type']=$req->input('type');
                $data['status']='1';
                $insert_user = DB::table('userinfos')->insert($data);

                if($insert_user){
                    return redirect('/signin')->with([
                        'message' => 'User Create Success Fully'
                    ]);
                }
            } 
     }
     public function logout(Request $req) {
         $req->session()->flush();

        return redirect('/signin');
     }
}
