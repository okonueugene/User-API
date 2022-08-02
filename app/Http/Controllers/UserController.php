<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $rules=array(
            'name' => 'required',
            'email' => "required|email|unique:users,email,",
            'password' => 'required|min:8',
            'password_confirmed' => 'required|min:8|same:password'
        );
        $validator=Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 403);
        } else {
            $user = new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;


            $result=$user ->save();

            if ($result) {
                return ["Result"=>"Data uploaded successfully"];
            } else {
                return ["Result"=>"Data not uploaded successfully"];
            }
        }
    }
    public function login(Request $request)
    {
        $user=User::where('email', $request->email)->first();
        if (!$user || $request->password!=$user->password) {
            return response([
                'message' => ['These credentials do not match our records. ']
            ], 404);
        } else {
            Session::put('Details', $user);
            $data= Session::get('Details');

            return response([
                'message' => ['Login sucess Welcome '],
                'data'=>$data
            ]);
        }
    }
    public function update(Request $request)
    {
        $user=User::find($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;

        $result=$user ->save();
        if ($result) {
            return response([ ['result'=>'data updated'],
            "new details"=>$user
     ]);
        } else {
            return ["Result"=>"Data not updated successfully"];
        }
    }

    public function getUser($id)
    {
        $result= User::where('id', $id)->get();
        if (count($result)) {
            return $result;
        } else {
            return ['result'=>'no records match'];
        }
    }
    public function delete($id)
    {
        $user=User::find($id);
        $result=$user->delete();
        if ($result) {
            return ['result'=>'Record has been Deleted  '];
        } else {
            return ['result'=>'Record has not been found  '];
        }
    }
    public function getUsers()
    {
        $users=User::all();

        if (count($users)) {
            return response([
                ['result'=>"Success"],
                'data'=>$users
            ]);
        } else {
            return ['result'=>'No users found '];
        }
    }
}
