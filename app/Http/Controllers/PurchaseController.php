<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history_view()
    {
        return view('purchase-list');
    }


    public function index()
    {
        return view('purchase-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $item1 = $request->item1 ?? 0;
        $item2 = $request->item2 ?? 0;
        $item3 = $request->item3 ?? 0;
        $item4 = $request->item4 ?? 0;

        // dd($item3);
        $purchase = Purchase::create([
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'item1' => $item1,
            'item2' => $item2,
            'item3' => $item3,
            'item4' => $item4,
        ]);


        return redirect()->route('purchase.show', $purchase->id)->with('success', 'Purchase Success');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $purchase = Purchase::findOrFail($id);

        return view('purchase-show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
