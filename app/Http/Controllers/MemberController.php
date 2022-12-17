<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\User;
use App\Models\admin;


use Validator;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function add(Request $req)
    {
        $user = new admin;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;

        $result = $user->save();
        if ($result) {
        return ["result"=>"data has been saved"];            
        }
        else{
        return ["result"=>"Operation Failed"];
        }
    }

    public function add2(Request $req)
    {
        $user = new Member;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;

        $result = $user->save();
        if ($result) {
        return ["result"=>"data has been saved"];            
        }
        else{
        return ["result"=>"Operation Failed"];
        }
    }

    public function a4($name){
        $data = Member::where("first_name",'like','%'.$name.'%')->orWhere("last_name",'like','%'.$name.'%')->orWhere("email",'like','%'.$name.'%')->get();
        return response()->json([
            'status' => 200,
            'search' => $data
        ]);
    }

    public function a5(Request $req){
        $rules = array(
            "email" =>'required|email'
        );

        $validator = Validator::make($req->all(),$rules);
        if($validator->fails())
        {
            return response()->json($validator->errors(),401) ;
        }
        else{
            $user = new Member;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            return ["result"=>"data has been saved"];            
            }
            else{
            return ["result"=>"Operation Failed"];
            }

        }

    }
}
