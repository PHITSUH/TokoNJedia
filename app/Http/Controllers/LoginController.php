<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return redirect()->route('loginPage');
    }
    public function loginPage(){
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function register(Request $r){
        try{
            info('test1');
            $r->validate([
                'username' => 'required|string|max:255|unique:user_data,username',
                'email' => 'required|string|email|unique:user_data,email',
                'password' => 'required|string|min:5|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
            ]);
            $user = UserData::create([
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'username' => $r->input('username'),
                'email' => $r->input('email'),
                'password' => bcrypt($r->input('password')),
                'phone'=> $r->input('phone'),
                'gender'=> $r->input('gender'),
                'dob' => $r->input('DOB'),
                'image' => 'https://source.unsplash.com/random',
                'google_id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            ]);

            Auth::login($user);

            return redirect()->route('home');
        }
        catch (ValidationException $e){
            info('test2');
            $errorMessage = $e->validator->getMessageBag()->first();
            return redirect()->back();
        }
    }

    public function login(Request $r){

        $data = [
            'email' => $r->email,
            'password' => $r->password
        ];

        if(Auth::guard('UserData')->attempt($data)){
            return redirect()->route('home');
        }
        else{
            info('test');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        info('test');
        return redirect()->route('loginPage');
    }
}
