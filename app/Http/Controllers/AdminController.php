<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\ExtraGasCylinder;
use App\Payment;
use App\User;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function isapprove()
    {
        $approve_datas=ExtraGasCylinder::all();     
        return view('is_request_approve',compact('approve_datas'));
    }

    public function store(Request $request,$id)
    {
        $status = ExtraGasCylinder::find($id);
        $status->is_requesr_approved=$request->is_requesr_approved;
        $status->save();
        return redirect()->back();
    }


    public function history($id)
    {
        $historyes = Payment::all();

        return view('history',compact('historyes','id'));
    }


    public function user_history_list()
    {
        $users = User::all();
        return view('user_history_list',compact('users'));
    }

}