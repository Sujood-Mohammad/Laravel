<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    public function calculate(Request $request){
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $operator=$request->input('operator');
        $result=0;
        if($operator=='add'){
            $result=$num1+$num2;
        }elseif($operator =='subtract'){
            $result=$num1-$num2;
        }elseif($operator =='multiply'){
            $result=$num1*$num2;
        }elseif($operator =='divide'){
            $result=$num1/$num2;
        }

    return view('calculator',compact('result'));
       }
}
