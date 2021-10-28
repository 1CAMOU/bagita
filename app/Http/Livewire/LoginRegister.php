<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Hash;
use App\User;
use Illuminate\Validation\Rules;

class LoginRegister extends Component
{
    public $users, $name, $username, $email, $password, $password_confirmation;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.login-register');
    }

    public function login() {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (\Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {
            return redirect('/')->with('toast', 'Welcome back!');
        } else {
            session()->flash('message', "E-mail or Password are wrong!");
        }
    }

    public function register() {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore() {
        $this->validate([
            'name' => ['required', 'string', 'max:35'],
            'username' => ['required', 'string', 'max:35', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = \App\Models\User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'isAdmin' => false,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/')->with('toast', 'Welcome to bagita,<br>' . $user["name"]);
    }
}
