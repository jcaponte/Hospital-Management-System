<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;

class SigninController extends Controller
{
   

    public function signup(Request $request){

//check if server request method is POST
$requestMethod= $request->ismethod('post');
$data=$request->all();
	if($requestMethod){


//check if all the inputs has data
   $rule=array(
'email'=>'required', 'password'=>'required');
 
 //message to user incase an error occurs
 $message=array(
 'email.required'=> 'please type in your email', 'password.required'=>' sorry password is needed');

//validation
$validator= Validator::make($data,$rule,$message);

//if error were found we return error message
if($validator->fails()){

return back()->withErrors($validator);
}else{
	return back()->with('success','you are successfully logged in');
}
}
}



public function create(Request $request){

//check if server request method is POST
$requestMethod= $request->ismethod('post');
$data=$request->all();
	if($requestMethod){


//check if all the inputs has data
   $rule=array(
   	'username'=>'required',
'email'=>'required',
 'password'=>'required | min:6',
 'confirmPassword'=>'required | same:password',
 'terms'=>'required',
 'gender'=>'required'

 );
 
 //message to user incase an error occurs
 $message=array('username.required'=>'username required',
 'email.required'=> 'please type in your email','password.required'=>'password is needed', 'password.min'=>'password should be more than 6 characters','confirmPassword.required'=>'password is required','confirmPassword.same'=>'password should match' , 'terms.required'=>'You must agree with the terms and conditions' , 'gender.required'=>'check gender');

//validation
$validator= Validator::make($data,$rule,$message);

//if error were found we return error message
if($validator->fails()){

return back()->withErrors($validator);
}else{
	return back()->with('success','you are successfully registered');
}

}//ends if


}//ends create
}//ends the main class