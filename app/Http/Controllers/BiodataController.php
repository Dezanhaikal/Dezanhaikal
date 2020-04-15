<?php

namespace App\Http\Controllers;
use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
    	return view('biodata');
    }
    public function create(Request $request)
    {
    	Biodata::create($request->all());
        
        return redirect('/home');
    }
}
