<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    public function index(){
    	return view('quem-somos/index');
    }
}
