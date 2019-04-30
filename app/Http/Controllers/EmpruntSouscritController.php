<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpruntSouscritRequest;
use App\EmpruntSouscrit;
use App\Http\Controllers\Controller;
class EmpruntSouscritController extends Controller
{
     public function index()
    {
        $emp=EmpruntSouscrit::all();
        return view ('EmpruntSouscrit.index',compact('emp'));
    }
}
