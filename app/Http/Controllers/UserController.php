<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        $request->authenticate();
    
        $request->session()->regenerate();

        $request->flash("auth.success", "Login successful!");

        

    
        // return redirect()->intended(route('dashboard', absolute: false));
        return back()->with('failed', 'Login failed!'); 
        
    }
    public function index(){
        $users = User::orderBy('created_at', 'asc')->paginate(10);

        return view('admin.User.user', ['users' => $users]);
    }

    public function search(Request $request) {
        $search = $request->search;
        $user = User::where( 'name', 'like',  $search . '%')->orWhere(
            'email', 'like',  $search)->paginate(10);
        return view('admin.User.user', ['users' => $user]);
    }

    public function create() {
        return view('admin.User.addUser');
    }

    public function store(Request $request) {
        // dd($request);
        $validator = ([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $validate = Validator::make($request->all(), $validator);

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }

       $validator = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => $request->password,
           'role' => $request->role
       ]);
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.User.editUser', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if ($request->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password->hash();
        $user->role = $request->role;
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }

}
