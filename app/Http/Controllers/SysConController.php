<?php

namespace App\Http\Controllers;

use App\Models\sysCon;
use Illuminate\Http\Request;

class SysConController extends Controller
{
    public function index()
    {
        $this->authorize('isAdmin');
        $sysCon = sysCon::all();
        return view('sysCon.index',[
            'sysCon'=>$sysCon,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin');

        return view('sysCon.create');
    }

    public function store(sysCon $sysCon, Request $request)
    {
        $this->authorize('isAdmin');

        $sysCon = new sysCon();
        $sysCon->conType = $request->conType;
        $sysCon->codeApp = $request->codeApp;
        $sysCon->linCh = $request->linCh;
        $sysCon->userAcc = $request->userAcc;

        $sysCon->save();
        return redirect('/sysCon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sysCon  $sysCon
     * @return \Illuminate\Http\Response
     */
    public function show(sysCon $sysCon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sysCon  $sysCon
     * @return \Illuminate\Http\Response
     */
    public function edit(sysCon $sysCon)
    {
        return view('sysCon.edit',[
            'sysCon'=>$sysCon
        ]);
    }


    public function update(Request $request, sysCon $sysCon)
    {
        $sysCon->conType = $request->conType;
        $sysCon->codeApp = $request->codeApp;
        $sysCon->linCh = $request->linCh;
        $sysCon->userAcc = $request->userAcc;

        $sysCon->save();
        return redirect('/sysCon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sysCon  $sysCon
     * @return \Illuminate\Http\Response
     */
    public function destroy(sysCon $sysCon)
    {
        $sysCon->delete();
        return redirect('/sysCon')
        ->with('success', 'deleted successfully');
    }
}
