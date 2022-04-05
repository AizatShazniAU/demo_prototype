<?php

namespace App\Http\Controllers;

use App\Models\approvelic;
use App\Models\lesen;
use App\Models\lesen_pay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LesenController extends Controller
{
    public function piechart()
    {
        $totals = DB::table('lesens')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when status = 'PASAR MALAM' then 1 end) as PASAR MALAM")
        ->selectRaw("count(case when status = 'PASAR PAGI' then 1 end) as PASAR PAGI")
        ->selectRaw("count(case when status = 'PENJAJA' then 1 end) as PENJAJA")
        ->first();
    }
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
        $l31 = lesen::where('appType',"PASAR MALAM")->get();
        $l32 = lesen::where('appType',"PASAR PAGI")->get();
        $l33 = lesen::where('appType',"PENJAJA")->get();
        // $l4 = lesen::where('id')->count();
        $lesen2 = lesen::all();
        $l1 = count($l31);
        $l2 = count($l32);
        $l3 = count($l33);
        $l4 = count($lesen2);
        // dd($l4);
        $l35 = lesen::where('licType',"BERMUSIM")->get();
        $l36 = lesen::where('licType',"SEMENTARA")->get();
        $l37 = lesen::where('licType',"TETAP")->get();
        $l5 = count($l35);
        $l6 = count($l36);
        $l7 = count($l37);



        // dd(count($l));

        // $totals = DB::table('lesens')
        // ->selectRaw('count(*) as total')
        // ->selectRaw("count(case when status = 'PASAR MALAM' then 1 end) as PASAR MALAM")
        // ->first();

        $lesen = lesen::all();
        return view('lesen.index',[
            'lesen'=>$lesen,
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
        return view('lesen.create');
    }

    public function store(lesen $lesen, Request $request)
    {
        $lesen = new lesen();
        $lesen->appName = $request->appName;
        $lesen->user_id = $request->user_id;
        $lesen->busName = $request->busName;
        $lesen->regNo = $request->regNo;
        $lesen->licName = $request->licName;
        $lesen->agency = $request->agency;
        $lesen->licType = $request->licType;
        $lesen->appType = $request->appType;
        $lesen->status = $request->status;
        if ($request->hasFile('attachment')) {
            $lesen->attachment = $request->file('attachment')->store('/public/attachment1');
        }
        $lesen->save();
        return redirect('/lesen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function show(lesen $lesen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function edit(lesen $lesen)
    {
        return view('lesen.edit',[
            'lesen'=>$lesen
        ]);
    }


    public function update(Request $request, lesen $lesen)
    {
        $lesen->appName = $request->appName;
        $lesen->user_id = $request->user_id;
        $lesen->busName = $request->busName;
        $lesen->regNo = $request->regNo;
        $lesen->licName = $request->licName;
        $lesen->agency = $request->agency;
        $lesen->licType = $request->licType;
        $lesen->appType = $request->appType;
        $lesen->status = $request->status;
        if ($request->hasFile('attachment')) {
            $lesen->attachment = $request->file('attachment')->store('/public/kertas_ctk1');
        }
        $lesen->save();
        return redirect('/lesen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function destroy(lesen $lesen)
    {
        $lesen->delete();
        return redirect('/lesen')
        ->with('success', 'deleted successfully');
    }
}
