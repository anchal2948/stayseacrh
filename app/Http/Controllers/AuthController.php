<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use App\Models\Admin;
use App\Models\Host;
use App\Models\User;

class AuthController extends Controller
{
    // *******************Admin*************************
    public function login_page()
    {
        return view('admin.login');
    }

    // ************************ Host ************************

    public function host_register_page()
    {
        return view('host.register');
    }

    public function host_register(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ])->validate();

        $create = Host::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if($create)
            return redirect()->route('host.login.page');
        else
            return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function host_login_page()
    {
        return view('host.login');
    }


    // **********************************User*********************

    public function user_register_page()
    {
        return view('user.signup');
    }

    public function user_register(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ])->validate();

        $create = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if($create)
            return redirect()->route('user.login.page');
        else
            return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function user_login_page()
    {
        return view('user.login');
    }


    // ******************************* common functions***********************

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'user_type' => 'required'
        ])->validate();

        // if($validate->fails())
            // return $this->sendError(array_values($validate->errors()->toArray()[0][0]),'');

        $email = $request->email;
        $password = $request->password;

        if($request->user_type == 'admin')
        {
            if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]) == true)
                return redirect()->route('admin.dashboard');
            else
                return redirect()->back()->withErrors(['error' => 'Invalid Credentials']);
        }
        elseif($request->user_type == 'host')
        {
            if(Auth::guard('host')->attempt(['email' => $email, 'password' => $password]) == true)
                return redirect()->route('myproperty.list');
            else
                return redirect()->back()->withErrors(['error' => 'Invalid Credentials']);
        }
        elseif($request->user_type == 'user')
        {
            if(Auth::attempt(['email' => $email, 'password' => $password]) == true)
                return redirect()->route('user.dashboard');
            else
                return redirect()->back()->withErrors(['error' => 'Invalid Credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        Auth::guard('host')->logout();
        // Auth::guard('admin')->logout();

        return redirect('/');
    }
}
