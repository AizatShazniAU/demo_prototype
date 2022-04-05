<?php

namespace App\Http\Controllers;

use App\Models\bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bill = bill::all();
        return view('bill.index',[
            'bill'=>$bill,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bill.create');
    }

    public function store(bill $bill, Request $request)
    {
        $bill = new bill();
        $bill->total = $request->total;
        $bill->typeBill = $request->typeBill;
        $bill->date = $request->date;
        $bill->detail = $request->detail;
        $bill->total = $request->total;
        $bill->status = $request->status;
        $bill->payee = $request->payee;
        $bill->payMethod = $request->payMethod;
        $bill->save();
        return redirect('/bill');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(bill $bill)
    {
        return view('bill.edit',[
            'bill'=>$bill
        ]);
    }


    public function update(Request $request, bill $bill)
    {
        $bill->total = $request->total;
        $bill->typeBill = $request->typeBill;
        $bill->date = $request->date;
        $bill->detail = $request->detail;
        $bill->total = $request->total;
        $bill->status = $request->status;
        $bill->payee = $request->payee;
        $bill->payMethod = $request->payMethod;
        $bill->save();
        return redirect('/bill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(bill $bill)
    {

        $bill->delete();
        return redirect('/bill')
        ->with('success', 'deleted successfully');
    }
}
