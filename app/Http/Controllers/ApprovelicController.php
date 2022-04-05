<?php

namespace App\Http\Controllers;

use App\Models\approvelic;
use Illuminate\Http\Request;

class ApprovelicController extends Controller
{
    public function index()
    {
        $approvelic = approvelic::all();
        return view('approvelic.index',[
            'approvelic'=>$approvelic,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('approvelic.create');
    }

    public function store(approvelic $approvelic, Request $request)
    {
        $approvelic = new approvelic();
        $approvelic->lesen_id = $request->lesen_id;
        $approvelic->appName = $request->appName;
        $approvelic->date = $request->date;
        $approvelic->status = $request->status;
        
        $approvelic->save();
        return redirect('/approvelic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\approvelic  $approvelic
     * @return \Illuminate\Http\Response
     */
    public function show(approvelic $approvelic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\approvelic  $approvelic
     * @return \Illuminate\Http\Response
     */
    public function edit(approvelic $approvelic)
    {
        // dd($approvelic);
        return view('approvelic.edit',[
            'approvelic'=>$approvelic
        ]);
    }


    public function update(Request $request, approvelic $approvelic)
    {
        $approvelic->lesen_id = $request->lesen_id;
        $approvelic->appName = $request->appName;
        $approvelic->date = $request->date;
        $approvelic->status = $request->status;
        
        $approvelic->save();
        return redirect('/approvelic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\approvelic  $approvelic
     * @return \Illuminate\Http\Response
     */
    public function destroy(approvelic $approvelic)
    {
        $approvelic->delete();
        return redirect('/approvelic')
        ->with('success', 'deleted successfully');
    }
}
