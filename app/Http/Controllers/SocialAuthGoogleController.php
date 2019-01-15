<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;
use App\models\SocialLogin;

class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {


            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();


            $user = new SocialLogin;
            $user->name = $googleUser->name;
            $user->email = $googleUser->email;
            $user->google_id = $googleUser->id;
            $user->password = md5(rand(1,10000));
            $user->save();
            Auth::loginUsingId($user->id);


            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
//                $user = new SocialLogin();
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        }
        catch (Exception $e) {
            return 'error';
        }
    }

}
