<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wallet\StoreRequest;
use App\Http\Requests\Wallet\UpdateRequest;
use App\Http\Requests\WalletRequest;
use App\Models\Currency;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function index( Wallet $wallet)
    {
        $user = Auth::user();
        $wallet = Wallet::find(1);
        $currency = Currency::find(1);
        return view('wallet.index', compact('user',  'wallet'));
    }

    public function create()
    {
        $currencies = Currency::all();
        return view('wallet.create', compact('currencies'));
    }

    public function store(StoreRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $user->wallets()->create($input);
        return redirect()->route('wallet.index');
    }

    public function edit(Wallet $wallet)
    {
        return view('wallet.edit', compact('wallet'));
    }

    public function update(UpdateRequest $request, Wallet $wallet)
    {
        $input = $request->all();
        $user = Auth::user();
        if ($user == $wallet->user) {
            $sum['mount'] = $input['mount'] + $wallet['mount'];

            $wallet->update($sum);
            return redirect()
                ->route('wallet.index')
                ->with(['success' => 'Ваш счет успешно пополнен']);

        } else {
            return back()
                ->withErrors(['msg' => 'Вы не можете пополнять чужой кошелек'])
                ->withInput();
        }
    }
}
