<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usercom;
use App\Anhskohbo\NoCaptcha\NoCaptchaServiceProvider;

class Comapnies extends Controller
{
    //
    function save (Request $req) 
    {

    	//print_r ($req->input());
    	$this->validate($req,[
    		'name'=> 'required',
    		'phone'=> 'nullable|max:13',
    		'subject'=> 'required',
    		'g-recaptcha-response' =>  'required|captcha',

    	]);
    	$Usercom= new Usercom;
    	$Usercom->name= $req->name;
    	$Usercom->phone= $req->phone;
    	$Usercom->subject= $req->subject;
    	$Usercom->save();
    	return redirect('/');


    }
}
