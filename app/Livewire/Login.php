<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;

    
    public $password;  
    public function render()
    {
        return view('livewire.login');
    }
 public function login(){
  

    if(Auth::attempt(['email' => $this->email,  'password'  => $this->password])){

    return redirect('table');  
    }else{
       return redirect('login')->with('error','Your Email Address or Password wrong');
    }
 }

 public function logout(){
    Auth::logout();
    return redirect("login");
 }
    
}
