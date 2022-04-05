<?php

namespace App\Http\Controllers;

use App\Models\cerKes;
use Illuminate\Http\Request;

class CerKesController extends Controller
{
    public function index()
    {
        $cerKes = cerKes::all();
        return view('cerKes.index',[
            'cerKes'=>$cerKes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cerKes.create');
    }

    public function store(cerKes $cerKes, Request $request)
    {
        $cerKes = new cerKes();
        $cerKes->speaker = $request->speaker;
        $cerKes->time = $request->time;
        $cerKes->date = $request->date;
        $cerKes->loc = $request->loc;

        $cerKes->save();
        return redirect('/cerKes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cerKes  $cerKes
     * @return \Illuminate\Http\Response
     */
    public function show(cerKes $cerKes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cerKes  $cerKes
     * @return \Illuminate\Http\Response
     */
    public function edit(cerKes $cerKes,$id)
    {
        // dd($cerKes);
        $cerKes = cerKes::find($id); 

        return view('cerKes.edit',[
            'cerKes'=>$cerKes
        ]);
    }


    public function update(Request $request, cerKes $cerKes,$id)
    {
        $cerKes = cerKes::find($id); 
        $cerKes->speaker = $request->speaker;
        $cerKes->time = $request->time;
        $cerKes->date = $request->date;
        $cerKes->loc = $request->loc;

        $cerKes->save();
        return redirect('/cerKes');
    }
    
    public function destroy(cerKes $cerKes,$id)
    {
        $cerKes = cerKes::find($id); 
        $cerKes->delete();
        return redirect('/cerKes')
        ->with('success', 'deleted successfully');
    }
}
