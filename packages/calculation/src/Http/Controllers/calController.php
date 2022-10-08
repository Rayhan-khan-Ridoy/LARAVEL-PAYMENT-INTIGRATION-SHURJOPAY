<?php

namespace Ridoy\Calcpackage\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class calController extends Controller
{
    public function add($a,$b){

        $result= $a+$b;
        return view('calc::add',compact(['result','a','b']));
    }
    public function sub($a,$b){
        $result= $a-$b;
        return view('calc::sub',compact(['result','a','b']));
    }
    public function mul($a,$b){

        $result= $a*$b;
        return view('calc::mul',compact(['result','a','b']));
    }
    public function div($a,$b){
        $result= $a/$b;
        return view('calc::div',compact(['result','a','b']));
    }
}
