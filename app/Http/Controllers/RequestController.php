<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $request = Request::all();
        return view('admin.request.index', compact('request'));
    }
    

}
