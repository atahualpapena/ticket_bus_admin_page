<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; 

class LoginController extends Controller
{
    private $variables;
    function __construct(){
        $this->variables = [
             'titulo' => 'Login',
             'favicon' => asset('img/log.png') 
         ];
    }
    public function index()
    { 
        return view('login/index',$this->variables);
    } 
    
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function login(Request $r)
    {
        if(!$r->has('email'))
        {
              return ['msn'=>'El email no fue enviado','status'=>0];
        }
        $user = Admin::where('user',$r->email)->first();
        if(empty($user)){
              return ['msn'=>'Usuario o contraña incorrecto','status'=>0];   
        }
        if (Hash::check($r->password, $user->pass))
        { 
            Auth::login($user); 
            return  ['msn'=>'Bienvenido ','status'=>1];
        }
        return ['msn'=>'Favor comunicarse con un administrador de sistema','status'=>0];
    }
}
