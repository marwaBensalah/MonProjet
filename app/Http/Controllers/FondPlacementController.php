<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FondPlacementRequest;
use App\FondPlacement;
use App\Http\Controllers\Controller;

class FondPlacementController extends Controller
{
     public function index()
    {
        $fond=FondPlacement::all();
        return view ('FondPlacement.index',compact('fond'));
    }
}
