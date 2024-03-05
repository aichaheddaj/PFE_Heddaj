<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function registration(){
        return view('Welcome');
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'string|required|min:2',
            'email'=>'email|string|required|min:5|unique:users',
            'password' => 'string|required|min:5|max:8'
                ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
                $res=$user->save();
                if($res){
                    return view('Login')->with('success', 'Your account has been created successfully!');
                }else{
return back()->with('fail','Something wrong !');
                }

    }
    
    public function loginuser(Request $request){
        $request->validate([
            'email'=>'email|string|required',
            'password' => 'string|required|min:5|max:8'
                ]);
                $user=User::where('email' , '=',$request->email )->first();
                if($user){
if(Hash::check($request->password , $user->password)){
$request->session()->put('loginId' ,$user->id);
return view('dashboard');
}else{
     return back()->with('fail', 'Password does not match!');
}
                }else{
       return back()->with('fail','This email is not registered !');        
                }
    }
}
