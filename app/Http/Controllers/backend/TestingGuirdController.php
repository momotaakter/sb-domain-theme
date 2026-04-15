<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestingGuirdController extends Controller
{
    //

    function index(){
        return view('backend.testing.index');
    }
}
