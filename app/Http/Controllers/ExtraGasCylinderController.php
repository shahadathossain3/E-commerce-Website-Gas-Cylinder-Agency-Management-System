<?php

namespace App\Http\Controllers;

use App\ExtraGasCylinder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\GasCylinder;
use App\User;
use Illuminate\Support\Facades\Auth;

class ExtraGasCylinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        $gasCylinders=GasCylinder::all();
        $cylinder_quantity=0;

       // dd(Auth::user()->id);

        foreach($gasCylinders as $gasCylinder)
        {
            $today=Carbon::now()->format('Y-m-d');
            $today_year=Carbon::createFromFormat('Y-m-d', $today)->year;
            $today_month=Carbon::createFromFormat('Y-m-d',$today)->month;
            $date=$gasCylinder->distributor_date;
            $date_year = Carbon::createFromFormat('Y-m-d', $date)->year;
            $date_month = Carbon::createFromFormat('Y-m-d', $date)->month;

           
        
            if(($gasCylinder->user_id==Auth::user()->id)&&($today_year==$date_year)&&($today_month==$date_month))
            {
                $cylinder_quantity=$gasCylinder->cylinder_quantity;
               // dd($cylinder_quantity);
            }

           
        }


       
        return view('requent_extra_cylinder',compact('cylinder_quantity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gasCylinder=new ExtraGasCylinder;
        $gasCylinder->user_id=$request->user_id;
        $gasCylinder->apply_type=$request->apply_type;
        $gasCylinder->extra_cylinder_quantity=$request->extra_cylinder_quantity;
        $gasCylinder->reason=$request->reason;
        $gasCylinder->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExtraGasCylinder  $extraGasCylinder
     * @return \Illuminate\Http\Response
     */
    public function show(ExtraGasCylinder $extraGasCylinder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExtraGasCylinder  $extraGasCylinder
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtraGasCylinder $extraGasCylinder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExtraGasCylinder  $extraGasCylinder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtraGasCylinder $extraGasCylinder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExtraGasCylinder  $extraGasCylinder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtraGasCylinder $extraGasCylinder)
    {
        //
    }
}
