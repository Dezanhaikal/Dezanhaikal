<?php

namespace App\Http\Controllers;

use App\Melihat;
use View;
use Illuminate\Http\Request;
use DB;

class MelihatController extends Controller
{
    public function index()
    {
        return view::make('melihat');
    }

    public function create()
    {
        //
    }

   public function store(Request $request){
        $yes1 = $request->yes1;
        $yes2 = $request->yes2;
        $yes3 = $request->yes3;
        $yes4 = $request->yes4;
        $yes5 = $request->yes5;
        $yes6 = $request->yes6;
        $yes6 = $request->yes6;
        $yes7 = $request->yes7;
        $yes8 = $request->yes8;
        $yes9 = $request->yes9;
        $yes10 = $request->yes10;
        $yes11 = $request->yes11;
        $yes12 = $request->yes12;
        $yes13 = $request->yes13;
        $yes14 = $request->yes14;
        $yes15 = $request->yes15;
        $yes16 = $request->yes16;
        $yes17 = $request->yes17;
        $yes18 = $request->yes18;
        $yes19 = $request->yes19;
        $yes20 = $request->yes20;
        $yes21 = $request->yes21;

        $yes = $yes1 + $yes2 + $yes3 + $yes4 + $yes5 + $yes6 + $yes7 + $yes8 + $yes9 + $yes10 + $yes11 + $yes12 + $yes13 + $yes14 + $yes15 + $yes16 + $yes17 + $yes18 + $yes19 + $yes20 + $yes21;

        DB::beginTransaction();
        $melihat = new Melihat();
        $melihat->id;
        $melihat->yes = $yes;
        $melihat->no = 0;
        $melihat->save();

        $id = $request->id;

        DB::update("
            UPDATE users
            SET token = token + 1
            WHERE id = ?
        ", [$id]);

        DB::commit();
        return view::make('result',compact('melihat'));
        
    }

    public function show(Melihat $melihat)
    {
            
    }

    public function edit(melihat $meliihat)
    {
        //
    }

    public function update(Request $request, Melihat $melihat)
    {
        //
    }

    public function destroy(Melihat $melihat)
    {
        //
    }
}
