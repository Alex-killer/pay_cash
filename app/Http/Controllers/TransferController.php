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
        $users = User::all();
        return view('transfer.index', compact('users'));
    }

    public function create(User $user, Wallet $wallet)
    {
        $userWallet = Auth::user();
        return view('transfer.create', compact( 'user', 'wallet', 'userWallet'));
    }

    public function store(TransferRequest $request)
    {
        $inputWallet = $request->all();
        $input = $request->only(['mount', 'wallet_id']);
        $wallet = Wallet::where('id', $input['wallet_id'])->first();
        $sum['mount'] = $input['mount'] + $wallet['mount'];
        $user = Auth::user();
        $userWallet = Wallet::where('id', $inputWallet['userWallet_id'])->first();
        $sumUser['mount'] =  $userWallet['mount'] - $inputWallet['mount'];


        $user->transfers()->create($input);
        $userWallet->update($sumUser);
        $wallet->update($sum);

        return redirect()->route('transfer.index');
    }

    public function edit(User $user)
    {
        return view('transfer.edit', compact('user'));
    }
}
