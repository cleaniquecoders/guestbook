<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use Auth;

class VisitorController extends Controller
{
    function form() {
    	$name = "Ziey";
    	$ic = "871113115212";
    	$phone = "0135867786";
    	$id = "1";

   		return view('form',compact('name','ic','phone','id'));
	}
	
 //    function form2(Request $r) {

 //    	$visitor = new Visitor;
	// 	if(!empty($r->id)){
	// 		$visitor = Visitor::find($r->id);
	// 	}
	
	//     return view('form',compact('visitor'));
	// }

	function submitform(Request $r) {

	 	$visit = new Visit;
	 	//$visitor = Visitor::find($r->id);

	 	$this->validate($r, [
    		'user_id' => 'required',
    		'floor' => 'required|integer',
    		'purpose' => 'required',
		]);

		$visit->user_id=$r->user_id;
	 	$visit->floor=$r->floor;
	 	$visit->purpose=$r->purpose;

    	$visit->save();

   		return redirect('/');
		//return $r->purpose."vv";
	}
}
