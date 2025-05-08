<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['name' => $incomingFields['loginame'], 'password' => $incormingFields['loginpassword ']])){
            $request->session()->regenerate();

        }

    }
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'name')],
            'password' => ['required', 'min:8', 'max:200']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }
}
