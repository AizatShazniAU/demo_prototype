<?php

namespace App\Http\Controllers;

use App\Models\gerai;
use Illuminate\Http\Request;

class GeraiController extends Controller
{
    public function index()
    {
        $gerai = gerai::all();
        return view('gerai.index',[
            'gerai'=>$gerai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gerai.create');
    }

    public function store(gerai $gerai, Request $request)
    {
        $gerai = new gerai();
        $gerai->namaG = $request->namaG;
        $gerai->ownerG = $request->ownerG;
        $gerai->rentFee = $request->rentFee;
        $gerai->loc = $request->loc;

        $gerai->save();
        return redirect('/gerai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gerai  $gerai
     * @return \Illuminate\Http\Response
     */
    public function show(gerai $gerai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gerai  $gerai
     * @return \Illuminate\Http\Response
     */
    public function edit(gerai $gerai)
    {
        return view('gerai.edit',[
            'gerai'=>$gerai
        ]);
    }


    public function update(Request $request, gerai $gerai)
    {
        $gerai->namaG = $request->namaG;
        $gerai->ownerG = $request->ownerG;
        $gerai->rentFee = $request->rentFee;
        $gerai->loc = $request->loc;

        $gerai->save();
        return redirect('/gerai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gerai  $gerai
     * @return \Illuminate\Http\Response
     */
    public function destroy(gerai $gerai)
    {
        $gerai->delete();
        return redirect('/gerai')
        ->with('success', 'deleted successfully');
    }
}
