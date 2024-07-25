<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
    
    }
    public function suma($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function multiplicacion($num1, $num2)
    {
        return $num1 * $num2;
    }
}
