<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Company;
use DB;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stockes=Stock::all();
        return view('add_stock',compact('stockes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $totalData=$request->add_new_product_quantity;
        $datas=Stock::all();
        $stock=new Stock;
        foreach($datas as $data)
        {
            if(($data->product_id == $request->product_id) && ($data->company_id == $request->company_id) && ($data->company_name == $request->company_name) && ($data->add_with_new_product===0))
            {
                $totalData=$data->total_product_quantity+$request->add_new_product_quantity;
                //$totalData='1';
                $editData=Stock::find($data->id);
                $editData->add_with_new_product='1';
                $editData->save();
            }
        }
        
        $stock->product_id=$request->product_id;
        $stock->company_id=$request->company_id;
        $stock->company_name=$request->company_name;
        $stock->add_new_product_quantity=$request->add_new_product_quantity;
        $stock->total_product_quantity=$totalData;
        $stock->add_with_new_product='0';
        $stock->stock_entry_date=$request->stock_entry_date;
        $stock->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $stock_quantitys=Stock::all();

        return view('stock_quantity',compact('stock_quantitys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
