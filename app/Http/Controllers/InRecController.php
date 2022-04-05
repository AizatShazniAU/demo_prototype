<?php

namespace App\Http\Controllers;

use App\Models\inRec;
use Illuminate\Http\Request;

class InRecController extends Controller
{
    public function index()
    {
        $inRec = inRec::all();
        return view('inRec.index',[
            'inRec'=>$inRec,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inRec.create');
    }

    public function store(inRec $inRec, Request $request)
    {
        $inRec = new inRec();
        $inRec->staffName = $request->staffName;
        $inRec->icNo = $request->icNo;
        $inRec->date = $request->date;
        $inRec->loc = $request->loc;

        $inRec->save();
        return redirect('/inRec');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inRec  $inRec
     * @return \Illuminate\Http\Response
     */
    public function show(inRec $inRec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inRec  $inRec
     * @return \Illuminate\Http\Response
     */
    public function edit(inRec $inRec)
    {
        return view('inRec.edit',[
            'inRec'=>$inRec
        ]);
    }


    public function update(Request $request, inRec $inRec)
    {
        $inRec->staffName = $request->staffName;
        $inRec->icNo = $request->icNo;
        $inRec->date = $request->date;
        $inRec->loc = $request->loc;

        $inRec->save();
        return redirect('/inRec');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inRec  $inRec
     * @return \Illuminate\Http\Response
     */
    public function destroy(inRec $inRec)
    {
        $inRec->delete();
        return redirect('/inRec')
        ->with('success', 'deleted successfully');
    }
}
