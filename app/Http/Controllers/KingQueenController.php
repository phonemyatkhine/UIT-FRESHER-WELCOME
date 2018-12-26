<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\king;
use App\queen;

class KingQueenController extends Controller
{
    //
    function uploadKing() {

			if(Input::hasFile('file1')) {

			$file1 = Input::file('file1');
			$file1->move('uploads', $file1->getClientOriginalName());
			$file2 = Input::file('file2');
			$file2->move('uploads', $file2->getClientOriginalName());
			$king = new king;
			$king->name = Input::get('name');
			$king->pic_path1 = $file1->getClientOriginalName();
			$king->pic_path2 = $file2->getClientOriginalName();
			$king->votes = 0;
			$king->save();
			echo "uploaded";
		}

    }

    function uploadQueen() {
			if(Input::hasFile('file1')) {

			$file1 = Input::file('file1');
			$file1->move('uploads', $file1->getClientOriginalName());
			$file2 = Input::file('file2');
			$file2->move('uploads', $file2->getClientOriginalName());
			$queen = new queen;
			$queen->name = Input::get('name');
			$queen->pic_path1 = $file1->getClientOriginalName();
			$queen->pic_path2 = $file2->getClientOriginalName();
			$queen->votes = 0;
			$queen->save();
			echo "uploaded";
		}

    }

	function showKing(){

		$king =  \App\king::all();	
		return view('selectioncards',compact('king'));

	}

	function showQueen() {

		$queen = \App\queen::all();
		return view('selectioncards',compact('queen'));

	}	

	function voteKing() {

		$user = Auth::user();


		if (Auth::check()) {

			$user_id = $user->facebook_id;
			$signed_user = User::where('facebook_id',$user_id)->first();


			$voted = Input::get('voted_id');
			$user_vote = $signed_user->k_voted;

			if($user_vote==0) {

			$signed_user->k_voted = $voted;
			$signed_user->save();

			$king = king::where('id', $voted)->first();
			$current_votes=$king->votes; 
			$current_votes = $current_votes+1;
			$king->votes = $current_votes;
			$king->save();

			return view('donevote',compact('king'));
				
			} elseif($user_vote!=0) {

				return view('votedKing');
			}

		} else  {
			return redirect('facebook');
		}
	}

	function voteQueen() {

		$user = Auth::user();

		if (Auth::check()) {

			$user_id = $user->facebook_id;
			$signed_user = User::where('facebook_id',$user_id)->first();

			$voted = Input::get('voted_id');
			$user_vote = $signed_user->q_voted;

			if($user_vote==0) {

				$signed_user->q_voted = $voted;
				$signed_user->save();

				$queen = queen::where('id', $voted)->first();
				$current_votes=$queen->votes; 
				$current_votes = $current_votes+1;
				$queen->votes = $current_votes;
				$queen->save();

		


				return view('donevote',compact('queen'));

				
			} elseif($user_vote!=0) {
				return view('votedQueen');
			}

		} else  {
			return redirect('facebook');
		}
	}
}
