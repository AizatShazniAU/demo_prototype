<?php

namespace App\Http\Controllers;

use App\Models\ivReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IvRegController extends Controller
{
    public function index()
    {

        $ivReg = ivReg::all();
        return view('ivReg.index',[
            'ivReg'=>$ivReg,
        ]);
        //more than two user gate role

        // if(Auth::user()->role != "user"){

        // }else{
        //     abort(403);
        // }
     


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ivReg.create');
    }

    public function store(ivReg $ivReg, Request $request)
    {
        $ivReg = new ivReg();
        $ivReg->appName = $request->appName;
        $ivReg->date = $request->date;
        $ivReg->phoneNo = $request->phoneNo;
        $ivReg->email = $request->email;
        $ivReg->address = $request->address;
        $ivReg->att = $request->att;
        
        $ivReg->save();
        return redirect('/ivReg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ivReg  $ivReg
     * @return \Illuminate\Http\Response
     */
    public function show(ivReg $ivReg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ivReg  $ivReg
     * @return \Illuminate\Http\Response
     */
    public function edit(ivReg $ivReg)
    {
        $this->authorize('isPanel');

        return view('ivReg.edit',[
            'ivReg'=>$ivReg
        ]);
    }


    public function update(Request $request, ivReg $ivReg)
    {
        $this->authorize('isPanel');

        $ivReg->appName = $request->appName;
        $ivReg->date = $request->date;
        $ivReg->phoneNo = $request->phoneNo;
        $ivReg->email = $request->email;
        $ivReg->address = $request->address;
        $ivReg->att = $request->att;
        
        $ivReg->save();
        return redirect('/ivReg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ivReg  $ivReg
     * @return \Illuminate\Http\Response
     */
    public function destroy(ivReg $ivReg)
    {
        $this->authorize('isAdmin');

        $ivReg->delete();
        return redirect('/ivReg')
        ->with('success', 'deleted successfully');
    }
}
