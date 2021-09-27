<?php

namespace App\Http\Controllers;

use App\GasCylinder;
use App\User;
use App\Stock;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GasCylinderController extends Controller
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
    public function create()
    {
        $users=User::all();
        return view('distributor_cylinder',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


     
        $user_id=$request->user_id;
        $product_id=$request->product_id;
        $company_id=$request->company_id;
        $company_name=$request->company_name;
        $cylinder_quantity=$request->cylinder_quantity;
        $distributor_date=$request->distributor_date;

        for($i=0; $i<count($user_id); $i++)
        {
            $datasave=
            [
                'user_id'=>$user_id[$i],
                'product_id'=>$product_id[$i],
                'company_id'=>$company_id[$i],
                'company_name'=>$company_name[$i],
                'cylinder_quantity'=>$cylinder_quantity[$i],
                'distributor_date'=>$distributor_date[$i],
            ];

            DB::table('gas_cylinders')->insert($datasave);
        }

        $datas=Stock::all();


        for($i=0; $i<count($request->user_id); $i++)
        {

            $add_with_new_product=0;

            $edit_data=Stock::where('product_id',$request->product_id[$i])->where('company_id',$request->company_id[$i])->where('company_name',$request->company_name[$i])->where('add_with_new_product',$add_with_new_product)->first();
            $edit_data->total_product_quantity=$edit_data->total_product_quantity-$request->cylinder_quantity[$i];
            $edit_data->save();
        
      }


       
        return redirect()->back();

    }

    
        

    

    /**
     * Display the specified resource.
     *
     * @param  \App\GasCylinder  $gasCylinder
     * @return \Illuminate\Http\Response
     */
    public function show(GasCylinder $gasCylinder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GasCylinder  $gasCylinder
     * @return \Illuminate\Http\Response
     */
    public function edit(GasCylinder $gasCylinder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GasCylinder  $gasCylinder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GasCylinder $gasCylinder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GasCylinder  $gasCylinder
     * @return \Illuminate\Http\Response
     */
    public function destroy(GasCylinder $gasCylinder)
    {
        //
    }
}
