<?php

namespace App\Http\Controllers;

use App\Models\jadual;
use Illuminate\Http\Request;

class JadualController extends Controller
{
    public function index()
    {
        $jadual = jadual::all();
        return view('jadual.index',[
            'jadual'=>$jadual,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadual.create');
    }

    public function store(jadual $jadual, Request $request)
    {
        $jadual = new jadual();
        $jadual->lesen_id = $request->lesen_id;
        $jadual->date = $request->date;
        $jadual->title = $request->title;
        $jadual->time = $request->time;
        $jadual->loc = $request->loc;
        
        $jadual->save();
        return redirect('/jadual');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadual  $jadual
     * @return \Illuminate\Http\Response
     */
    public function show(jadual $jadual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadual  $jadual
     * @return \Illuminate\Http\Response
     */
    public function edit(jadual $jadual)
    {
        return view('jadual.edit',[
            'jadual'=>$jadual
        ]);
    }


    public function update(Request $request, jadual $jadual)
    {
        $jadual->lesen_id = $request->lesen_id;
        $jadual->date = $request->date;
        $jadual->title = $request->title;
        $jadual->time = $request->time;
        $jadual->loc = $request->loc;
        
        $jadual->save();
        return redirect('/jadual');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadual  $jadual
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadual $jadual)
    {
        $jadual->delete();
        return redirect('/jadual')
        ->with('success', 'deleted successfully');
    }
}
