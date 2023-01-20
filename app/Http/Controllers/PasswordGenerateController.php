<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPasswords;
use Auth;

class PasswordGenerateController extends Controller
{
    //

    public function generate(Request $request)
    {
            $total_charecters = ($request->pass_length) ? $request->pass_length : 15;
     
            if($request->type == "all"){
                $uppercase = collect(range('A', 'Z'));
                $lowercase = collect(range('a', 'z'));
                $numbers = collect(range(0,9));
                $symbols = collect(['!','@','#','$','%','&','(',')']);
            }

            else{
                $uppercase = ($request->uppercase == "true") ? collect(range('A', 'Z')) : collect();
                $lowercase = ($request->lowercase == "true") ? collect(range('a', 'z')) : collect();
                $numbers =  ($request->numbers == "true") ? collect(range(0,50)) : collect();
                $symbols = ($request->symbols == "true") ? collect(['!','@','#','$','%','&','(',')']) : collect(); 
            }
            
            
            $merges = $uppercase->concat($lowercase)->concat($numbers)->concat($symbols);
            $suffeled = $merges->shuffle();
            
            $sliced = $suffeled->slice(0, $total_charecters);
            $password = $sliced->implode('');
       
          if(Auth::user()){
                 $data = UserPasswords::firstOrNew(['user_id' => Auth::user()->id]);
                 $data->generated_passwords = $password;
                 $data->save();

                 return response()->json(['success'=>$password]);     
          }
          else{
            return response()->json(['success'=>$password]);
          }
            
    }
}