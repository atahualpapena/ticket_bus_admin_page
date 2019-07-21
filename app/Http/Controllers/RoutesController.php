<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; 

class RoutesController extends Controller
{
    private $variables;
    function __construct(){
        $this->middleware('auth');
        $this->variables = [
             'title' => 'Rutas',
             'RoutesClass' => ' class="active" ',
             'favicon' => asset('img/log.png') 
         ];
    }
    public function index()
    { 
        return view('backend/route/index',$this->variables);
    } 
    
    
}
