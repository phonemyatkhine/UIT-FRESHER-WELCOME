<?php


namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Auth;


class FacebookController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {       
            if(!Auth::check()) {
                
            $user = Socialite::driver('facebook')->user();
            $userModel = new User;
            
            $checkUser = User::where('facebook_id',$user->getId())->first();

            if(!empty($checkUser)) {

                Auth::loginUsingId($user->getId());
                return redirect('noti');

            } else {

                $userModel->name = $user->getName();
                $userModel->email = $user->getEmail();
                $userModel->facebook_id = $user->getId();
                $userModel->k_voted = 0;
                $userModel->q_voted = 0;

                $userModel->save();

                Auth::loginUsingId($userModel->id);

            }

            

            return redirect('KingsQueens');

            } else {
                return redirect('KingsQueens');
            }

    }
}