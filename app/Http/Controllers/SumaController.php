<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }
}
