<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Validate('required|email', message: 'Please enter a valid work email')]
    public $email = '';
    
    #[Validate('required|min:6', message: 'Password must be at least 6 characters')]
    public $password = '';
    
    public $remember = false;

    public function login()
    {
        // Validate the form inputs
        $this->validate();

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Authentication successful
            session()->regenerate();
            
            // Redirect to intended page or dashboard
            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        session()->flash('error', 'Invalid credentials. Please check your email and password.');
        
        // Clear the password field for security
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}