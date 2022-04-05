<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = laporan::all();
        return view('laporan.index',[
            'laporan'=>$laporan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now()->format('Y-m-d');
        
        return view('laporan.create',[
            'today'=>$today,
        ]);
    }

    public function store(laporan $laporan, Request $request)
    {
        $laporan = new laporan();
        $laporan->title = $request->title;
        $laporan->date = $request->date;
        $laporan->reportBy = $request->reportBy;
        $laporan->reportType = $request->reportType;
        $laporan->cat = $request->cat;
        $laporan->status = $request->status;
        $laporan->save();
        return redirect('/laporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        return view('laporan.edit',[
            'laporan'=>$laporan
        ]);
    }


    public function update(Request $request, laporan $laporan)
    {
        $this->authorize('isAdmin');

        $laporan->title = $request->title;
        $laporan->date = $request->date;
        $laporan->reportBy = $request->reportBy;
        $laporan->reportType = $request->reportType;
        $laporan->cat = $request->cat;
        $laporan->status = $request->status;
        
        $laporan->save();
        return redirect('/laporan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        $this->authorize('isAdmin');

        $laporan->delete();
        return redirect('/laporan')
        ->with('success', 'deleted successfully');
    }
}
