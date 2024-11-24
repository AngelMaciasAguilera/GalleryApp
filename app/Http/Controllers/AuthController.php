<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }

    public function signin()
    {
        return view('authentication.signin');
    }


    public function storeuser(Request $request)
    {
        if($request->password != $request->password_confirmation){
            return back()->withInput()->withErrors(['error' => 'Passwords do not match']);
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User($request->all());
        try {
            $user->save();
            return redirect()->route('login')->with(['message' => 'Your account has been created successfully']);
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Email already exists']);
        }
    }

    public function makelogin(Request $request)
    {
        $error = '';

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('user', $user->email);
                return redirect(route('image.index'));
            }else{
                $error = 'The password is incorrect';
            }

        }else{
            $error = 'The email does not exist';
        }

        return back()->withInput()->withErrors(['error' => $error]);
        

    }
}
