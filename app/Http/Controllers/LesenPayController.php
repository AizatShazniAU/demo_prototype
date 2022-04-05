<?php

namespace App\Http\Controllers;

use App\Models\lesen_pay;
use App\Models\approvelic;
use App\Models\lesen;
use Illuminate\Http\Request;

class LesenPayController extends Controller
{
    public function index()
    {
        $lapp1 = approvelic::where('status',"SUDAH DIBAYAR")->get();
        $lapp2 = approvelic::where('status',"BELUM DIBAYAR")->get();
        $lapp3 = approvelic::all();
        $lapp4 = count($lapp3);
        // $lesen_pay1 = lesen_pay::where('status',"SUDAH DIBAYAR")->get();
        // $lesen_pay2 = lesen_pay::where('status',"BELUM DIBAYAR")->get();
        $lesen_pay3 = lesen_pay::all();
        $lesen_pay4 = count($lesen_pay3);
        $l1 = lesen::where('appType',"PASAR MALAM")->get();
        $l2 = lesen::where('appType',"PASAR PAGI")->get();
        $l3 = lesen::where('appType',"PENJAJA")->get();
        // $l4 = lesen::where('id')->count();
        $lesen2 = lesen::all();
        $l4 = count($lesen2);
        // dd($l4);
        $l5 = lesen::where('licType',"BERMUSIM")->get();
        $l6 = lesen::where('licType',"SEMENTARA")->get();
        $l7 = lesen::where('licType',"TETAP")->get();

        $lesen_pay = lesen_pay::all();
        return view('lesen_pay.index',[
            'lesen_pay'=>$lesen_pay,
            'lesen1'=>$l1,
            'lesen2'=>$l2,
            'lesen3'=>$l3,
            'lesen4'=>$l4,
            'lesen5'=>$l5,
            'lesen6'=>$l6,
            'lesen7'=>$l7,
            'lesen8'=>$lapp1,
            'lesen9'=>$lapp2,
            'lesen10'=>$lapp4,
            // 'lesen11'=>$lapp1,
            // 'lesen12'=>$lapp2,
            'lesen13'=>$lesen_pay4,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lesen_pay.create');
    }

    public function store(lesen_pay $lesen_pay, Request $request)
    {
        $lesen_pay = new lesen_pay();
        $lesen_pay->lesen_id = $request->lesen_id;
        $lesen_pay->lesenFee = $request->lesenFee;
        $lesen_pay->payMet = $request->payMet;
        $lesen_pay->date = $request->date;
        $lesen_pay->status = $request->status;
        
        $lesen_pay->save();
        return redirect('/lesen_pay');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lesen_pay  $lesen_pay
     * @return \Illuminate\Http\Response
     */
    public function show(lesen_pay $lesen_pay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lesen_pay  $lesen_pay
     * @return \Illuminate\Http\Response
     */
    public function edit(lesen_pay $lesen_pay)
    {
        return view('lesen_pay.edit',[
            'lesen_pay'=>$lesen_pay
        ]);
    }


    public function update(Request $request, lesen_pay $lesen_pay)
    {
        $lesen_pay->lesen_id = $request->lesen_id;
        $lesen_pay->lesenFee = $request->lesenFee;
        $lesen_pay->payMet = $request->payMet;
        $lesen_pay->date = $request->date;
        $lesen_pay->status = $request->status;
        
        $lesen_pay->save();
        return redirect('/lesen_pay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lesen_pay  $lesen_pay
     * @return \Illuminate\Http\Response
     */
    public function destroy(lesen_pay $lesen_pay)
    {
        $lesen_pay->delete();
        return redirect('/lesen_pay')
        ->with('success', 'deleted successfully');
    }
}
