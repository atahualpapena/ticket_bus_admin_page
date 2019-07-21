<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    private $variables;
    private $limit;
    function __construct(){ 
        $this->middleware('auth');
        $this->variables = [
            'QRClass' => ' class="active" ',
             'title' => 'Bus',
             'favicon' => asset('img/log.png') 
         ];
         $this->limit = 10;
    }
    public function index()
    { 
        return view('backend/qrcode/index',$this->variables);
    } 
}
