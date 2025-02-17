<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }


    public function auth(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ],[
            'email.required'    => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi!',
        ]);


        $authInfo = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];


        if (Auth::attempt($authInfo))
        {
            if (Auth::user()->role == 'admin') {
                return redirect('articles')->with('success', 'Login Success! Welcome back ' . Auth::user()->name . '!');
            } else {
                return redirect('articles')->with('success', 'Login Success! Welcome back ' . Auth::user()->name . '!');
            }
        }
        else {
            return redirect('login')->withErrors('Username dan Password tidak sesuai!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    function register() 
    {
        return view('register');
    }

    function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name'             => 'required',
            'email'            => 'required|email|unique:users',
            'password'         => 'required|min:4',
            'confirm_password' => 'required|same:password',
            'bio'              => 'nullable',
        ]);
        
        if($validator->fails()){
            return redirect('register')->withErrors($validator->errors())->withInput();
        }
        
        try {
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $user = User::create($input);
            $data['email'] =  $user->email;
            return redirect('login')->with('message', 'Success Register User! Please Login.');
            
        } catch (\Throwable $e) {
            return redirect('register')->withErrors('Failed! ', $e->getMessage())->withInput();
        }
    }
}
