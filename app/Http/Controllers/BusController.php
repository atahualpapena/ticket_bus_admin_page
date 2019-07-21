<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Bus; 

class BusController extends Controller
{
    private $variables;
    private $limit;
    function __construct(){ 
        $this->middleware('auth');
        $this->variables = [
            'BusClass' => 'class="active"',
             'title' => 'Bus',
             'favicon' => asset('img/log.png') 
         ];
         $this->limit = 10;
    }
    public function index()
    { 
        return view('backend/bus/index',$this->variables);
    } 
     
    public function profile(Request $r)
    { 
        return Bus::where('idbus',$r->id)->first();
    } 
     
    public function all(Request $r)
    { 
        return Bus::where('brand','LIKE','%'.$r->search.'%')->
                    orWhere('licenseplate','LIKE','%'.$r->search.'%')->paginate($this->limit);
    } 

    public function delete(Request $r)
    {
        Bus::where('idbus',$r->idbus)->delete();
        return ['status'=>1];        
    }

    public function storage(Request $r)
    {
        if(!empty($r->idbus))
        {
            $bus = Bus::find($r->idbus);
        }else
        {
            $bus =new  Bus();
        } 
        $bus->licenseplate = $r->idplate;
        $bus->brand = $r->brandBus;
        $bus->year = $r->yearBus;
        $bus->capacity = $r->capacityBus;
        $bus->notes = $r->notesBus;
        $bus->save();
        if($bus->idbus > 0){
            return ['status'=>1];
        }else
        {
            return ['status'=>0];
        }
    }
     
}
