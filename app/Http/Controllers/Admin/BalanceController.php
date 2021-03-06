<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function index() 
    {
        $amount = auth()->user()->balance ? auth()->user()->balance->amount : 0;
        return view('admin.balance.index', compact('amount') );
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function depositStore(Request $request)
    {
        dd($request->valor);
    }

}
