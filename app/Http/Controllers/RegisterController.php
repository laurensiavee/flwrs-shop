<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('register', [
            "title" => "Register"
        ]);
    }

    // public function store() {
    //     return request()->all();
    // }

    public function store(Request $request) {
        $validated = $request->validate([
            // name email password2 address phone
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'address' => ['required', 'min:15'],
            'phone' => ['required', 'integer', 'min:11']
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/login');
    }

    public function update(Request $request, User $user) {
        $rules = [
            'name' => ['required', 'max:255'],
            // 'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'address' => ['required', 'min:15'],
            'phone' => ['required', 'integer', 'min:11']
        ];
        
        $validated = $request->validate($rules);

        $validated['email'] = $user->email;
        $validated['password'] = bcrypt($validated['password']);

        User::where('id', $user->id)->update($validated);
        return redirect('/profile');
        // return('ss');
    }

}
