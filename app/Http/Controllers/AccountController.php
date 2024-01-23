<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $accounts = Account::where('is_deleted', 0)->get();
        $totalTransaction = Account::sum("amount");
        $monthTransaction = Account::whereYear('created_at',date('Y'))
                                        ->whereMonth('created_at',date('m'))
                                        ->where('is_deleted',0)
                                        ->sum('amount');

        $weekTransaction = Account::where('created_at', '>', Carbon::now()->startOfWeek())
                                    ->where('created_at', '<', Carbon::now()->endOfWeek())
                                    ->where('is_deleted',0)
                                    ->sum('amount');

        $yearTransaction = Account::whereYear('created_at',date('Y'))
                                    ->where('is_deleted',0)
                                    ->sum('amount');
        // dd($accounts);

        return view('account.index', ['accounts' => $accounts,
                                    'totalTransaction' => $totalTransaction ,
                                    'monthTransaction' => $monthTransaction ,
                                    'weekTransaction' => $weekTransaction,
                                    'yearTransaction' => $yearTransaction,
                                ]);
    }

    public function filter(Request $request) {
        $request->validate([
            'fromDate' => 'required',
            'toDate' => 'required',
        ]);
        // $accounts = Account::where('is_deleted', 0)->latest()->get();
        $totalTransaction = Account::sum("amount");
        $monthTransaction = Account::whereYear('created_at',date('Y'))
                                        ->whereMonth('created_at',date('m'))
                                        ->where('is_deleted',0)
                                        ->sum('amount');

        $weekTransaction = Account::where('created_at', '>', Carbon::now()->startOfWeek())
                                    ->where('created_at', '<', Carbon::now()->endOfWeek())
                                    ->where('is_deleted',0)
                                    ->sum('amount');

        $yearTransaction = Account::whereYear('created_at',date('Y'))
                                    ->where('is_deleted',0)
                                    ->sum('amount');

        $searchTransaction =  Account::where('is_deleted', 0)
                    ->where('created_at', '>', $request->fromDate)
                    ->where('created_at', '<', $request->toDate)
                    ->latest()
                    ->sum("amount");
        $accounts =  Account::where('is_deleted', 0)
                    ->where('created_at', '>', $request->fromDate)
                    ->where('created_at', '<', $request->toDate)
                    ->latest()
                    ->get();
        // dd($accounts);
        return view('account.index', [
                                        'accounts' => $accounts,
                                        'searchTransaction' => $searchTransaction,
                                        'totalTransaction' => $totalTransaction ,
                                        'monthTransaction' => $monthTransaction ,
                                        'weekTransaction' => $weekTransaction,
                                        'yearTransaction' => $yearTransaction,


                                        ]);
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
