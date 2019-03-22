<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function showData(Request $data){
        $num1 = $data->input('num1');
        $num2 = $data->input('num2');
        $operator = $data->input('operator');
        print eval('return '.$num1.$operator.$num2.';');
    }
}
