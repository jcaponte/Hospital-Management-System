<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;

class SigninController extends Controller
{
   

    public function create(Request $request){

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









	/*	$data=$request->all();
var_dump($data);*/
	}

else{
	echo 'requestMethod not allowed';
}




    //  return 'hello signin';

    }//ends index
}
