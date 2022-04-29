<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Models\Currency;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function index()
    {
        $wallets = Wallet::all();
        return view('transfer.index', compact('wallets'));
    }

    public function create(User $user, Wallet $wallet)
    {
        return view('transfer.create', compact( 'user', 'wallet'));
    }

    public function store(TransferRequest $request, Wallet $wallet)
    {
        $input = $request->all();
        $sum = $input['mount'] + $wallet['mount'];
        dd($wallet['mount']);
        $user = Auth::user();
        $user->transfer()->create($input);
        return redirect()->route('transfer.index');
    }

    public function edit(User $user)
    {
        return view('transfer.edit', compact('user'));
    }
}
