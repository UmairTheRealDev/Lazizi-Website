<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.maindashboard');
    }
    public function register_form()
    {
        return view('dashboard.authentication.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => 'required|min:8',
            'address' => 'required',
            'contact' => 'required|min:11',
        ]);
        if (User::create($data)) {
            return redirect()->route('user.login')->with(['success' => 'User registered successfully']);
        }
    }
    public function login_form()
    {

        return view('dashboard.authentication.login');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($data)) 
        {
            return redirect()->route('website.home')->with(['success' => 'User logged in successfully']);
        } else {
            return redirect()->route('user.login')->with(['error' => 'Invalid credentials']);
        }
        
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('website.home')->with(['success' => 'User logged out successfully']);
    }
    public function users_show()
    {
        $users = User::all();
        return view('dashboard\authentication\showusers')->with(['users' => $users]);
    }
    public function user_delete($id)
    {
        $user = User::find($id);



        if($user) {
            $user->delete();
            return redirect()->route('users.table')->with(['success' => 'User deleted successfully']);
        } else {
            return redirect()->route('users.table')->with(['error' => 'User not found']);
        }

    }
    public function user_edit($id)
    {
        $user = User::find($id);
        return view('dashboard\authentication\edituser')->with(['user' => $user]);

    }
    public function user_update(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user)
         {
            return redirect()->route('users.table')->with(['error' => 'User not found']);
         }
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:255'],
            'password' => 'required|min:8',
            'address' => 'required',
            'contact' => 'required|min:11',
            'usertype' => 'required',
        ]);

        if($user->update($data))
        {

            return redirect()->route('users.table')->with(['success' => 'User updated successfully']);

        }
        else
        {
            return redirect()->route('users.table')->with(['error' => 'User not updated']);
        }
    }
}




