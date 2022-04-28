<?php

namespace App\Http\Controllers;

use App\Http\Requests\WalletRequest;
use App\Models\Currency;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function index( Wallet $wallet)
    {
        $users = User::all();
        return view('wallet.index', compact('users',  'wallet'));
    }

    public function create()
    {
        $currencies = Currency::all();
        return view('wallet.create', compact('currencies'));
    }

    public function store()
    {
        return redirect()->route('wallet.index');
    }

    public function update(WalletRequest $request, Wallet $wallet)
    {
        $input = $request->all();
        $sum['rub'] = $input['rub'] + $wallet['rub'];

        $wallet->update($sum);
        return redirect()->back();
    }
}
