<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Socialite;
use Illuminate\Support\Facades\Route;
use Validator;
use Illuminate\Support\Facades\Auth;
use Exception;

class SocialController extends Controller
{
    protected function _registerOrLoginUser($data){
        $user = User::where('email',$data->email)->first();
          if(!$user){
             $user = new User();
             $user->name = $data->name;
             $user->email = $data->email;
             $user->provider_id = $data->id;
             $user->avatar = $data->avatar;
             $user->save();
          }
        Auth::login($user);
        }
        
}