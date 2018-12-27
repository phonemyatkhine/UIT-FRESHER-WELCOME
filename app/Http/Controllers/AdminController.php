<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Admin;
use Auth;
use App\king;
use App\queen;

class AdminController extends Controller
{
    //
    function adminLogin() {

    	if(Input::get('adminEmail')) {
    		$gmail = Input::get('adminEmail');
    		$pw = md5(Input::get('adminPassword'));
    		$user = Admin::where('gmail',$gmail)->first();

    		if(($user->password)==$pw) {
    			
    			session(['s_id' => $user->s_id]);
    			return view('admin');

    		} else {

    			return redirect()->back();
    		}
    	}
    }

    function enableVoting() {

    	$s_id = session('s_id');

    	if($s_id=='5191820546142446111339') {

    		$king = king::all();
    		$queen = queen::all();

    		foreach ($king as $king) 
    		{
    			/*dd($king);*/
    			$king->flag = 1;
    			$king->save();
    		}

    		foreach ($queen as $queen) 
    		{

	    		$queen->flag = 1;
	    		$queen->save();
    		}
    		
    	} else {

    		return redirect('');

    	}
    }
     function disableVoting() {

    	$s_id = session('s_id');

    	if($s_id=='5191820546142446111339') {

    		$king = king::all();
    		$queen = queen::all();

    		foreach ($king as $king) 
    		{
    			/*dd($king);*/
    			$king->flag = 0;
    			$king->save();
    		}

    		foreach ($queen as $queen) 
    		{

	    		$queen->flag = 0;
	    		$queen->save();
    		}
    		
    	} else {

    		return redirect('');

    	}
    }
    function showVotes() {
    	$s_id = session('s_id');

    	if($s_id=='5191820546142446111339') {

    		$king = king::all();
    		$queen = queen::all();

    		foreach ($king as $king) 
    		{
    			/*dd($king);*/
    			$king->flag = 2;
    			$king->save();
    		}

    		foreach ($queen as $queen) 
    		{

	    		$queen->flag = 2;
	    		$queen->save();
    		}
    		
    	} else {

    		return redirect('');

    	}
    }
}
