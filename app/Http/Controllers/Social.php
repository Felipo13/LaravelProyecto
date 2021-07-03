<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,File;
use Auth;
use App\Models\User;
use App\Models\SocialProfile;
use Laravel\Socialite\Facades\Socialite;

class Social extends Controller
{
    
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        //try {
            $userSocial = Socialite::driver('google')->user();
            
            $user = User::where('email', $userSocial->getemail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $userSocial->getname(),
                    'email' => $userSocial->getemail(),
                    ]);

            }

            $socialProfile = SocialProfile::where('social_id', $userSocial->getId())->first();
            if (!$socialProfile) {
                SocialProfile::create([
                    'user_id' => $user->id,
                    'social_id' => $userSocial->getId(),
                    'social_avatar' => $userSocial->getavatar(),
                ]);
            }
               $iden = $userSocial->getemail();

            auth()->login($userSocial);
            return redirect()->route('usercontro')/*->with($iden)*/;
                   
    }

}
