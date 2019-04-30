<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpruntEmisRequest;
use App\EmpruntEmis;
use App\Http\Controllers\Controller;
class EmpruntEmisController extends Controller
{
    
     public function store()
    {
       return view ('EmpruntEmis.store');
    }
    public function index()
    {
        $emp=EmpruntEmis::all();
        return view ('EmpruntEmis.index',compact('emp'));
    }
    public function detail(){
    	return view ('EmpruntEmis.Detail');
    }
}
