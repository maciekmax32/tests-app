<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'pierwsza strona';
    }
    public function show() {
//  fasfasf
        $array = [
            1,2,3,4,'a',5
        ];
        dd($array)
        return 'test';
    }
}
