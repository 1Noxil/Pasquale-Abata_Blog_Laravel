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
            
            $user= User::updateOrCreate([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => Hash::make($socialUser->token),
            ],[
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
            'social-id' => $socialUser->id,
            'social-name' => $social,
            'social-avatar' => $socialUser->avatar,
            'user_id' => $user->id
        ], [
            'email' => $socialUser->email,
            'social-id' => $socialUser->id,
            'social-name' => $social,
            'social-avatar' => $socialUser->avatar,
            'email' => $socialUser->email,
            'password' => Hash::make($socialUser->token),
            'user_id' => $user->id
        ]);
        
        
        return redirect('/');
        
    }
}
