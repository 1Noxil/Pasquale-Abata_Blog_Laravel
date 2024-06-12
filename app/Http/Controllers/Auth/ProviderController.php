<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($social){
        return Socialite::driver($social)->redirect();
    }
    
    public function callback($social){
        
        
        $socialUser = Socialite::driver($social)->user();
        if(!User::where('email',$socialUser->email)->first()){
            
            $user= User::create([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => Hash::make($socialUser->token),   
            ]);
            
        } else{
            $user = User::where('email',$socialUser->email)->first();
        }
        
        Auth::login($user);
        
        Provider::updateOrCreate([
            'email' => $socialUser->email,
        ], [
            'email' => $socialUser->email,
            'social_id' => $socialUser->id,
            'social_name' => $social,
            'social_avatar' => $socialUser->avatar,
            'email' => $socialUser->email,
            'user_id' => $user->id
        ]);
        
        
        return redirect('/');
        
    }
}
