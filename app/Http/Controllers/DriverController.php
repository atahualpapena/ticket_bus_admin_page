<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver; 

class DriverController extends Controller
{
    private $variables;
    private $limit;
    function __construct(){ 
        $this->middleware('auth');
        $this->variables = [
            'DriverClass' => ' class="active" ',
             'title' => 'Driver',
             'favicon' => asset('img/log.png') 
         ];
         $this->limit = 10;
    }
    public function index()
    { 
        return view('backend/driver/index',$this->variables);
    } 
     
    public function profile(Request $r)
    { 
        return Driver::where('iddriver',$r->id)->first();
    } 
     
    public function all(Request $r)
    { 
        return Driver::where('firstname','LIKE','%'.$r->search.'%')->
                    orWhere('lastname','LIKE','%'.$r->search.'%')->
                    orWhere('drivernumber','LIKE','%'.$r->search.'%')->paginate($this->limit);
    } 

    public function delete(Request $r)
    {
        Driver::where('iddriver',$r->iddriver)->delete();
        return ['status'=>1];        
    }

    public function storage(Request $r)
    { 
        if(!empty($r->iddriver))
        {
            $Driver = Driver::find($r->iddriver);
        }else
        {
            $Driver =new  Driver();
        } 
        $Driver->drivernumber = $r->drivernumber;
        $Driver->firstname = $r->firstname;
        $Driver->lastname = $r->lastname;
        $Driver->birthdate = $r->birthdate;
        $Driver->sex = $r->sex;
        $Driver->score = 5;
        $Driver->save();
        if($Driver->iddriver > 0){
            return ['status'=>1];
        }else
        {
            return ['status'=>0];
        }
    }
     
}
