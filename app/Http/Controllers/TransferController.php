<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Models\Currency;
use App\Models\User;
use App\Models\Wallet;
use App\Services\TransferService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends BaseController
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

    public function store(TransferRequest $request, TransferService $service)
    {
        $inputWallet = $request->all();
        $input = $request->only(['mount', 'wallet_id']);
        $userWallet = Wallet::where('id', $inputWallet['userWallet_id'])->first(); // Кошелек с которого переводим
        $wallet = Wallet::where('id', $input['wallet_id'])->first(); // Кошелек на который переводим
        $currencies = $wallet->currency->price; // Вытаскиваем цену валюты на переводимый кошелек
        $currencyTransfer = $userWallet->currency->price; // Вытаскиваем цену валюту с переводимого кошелька

        if ($inputWallet['mount'] < $userWallet['mount']) {

            $service->update($userWallet, $wallet, $input, $inputWallet, $currencyTransfer, $currencies);

            return redirect()
                ->route('transfer.index')
                ->with(['success' => 'Успешно Переведено']);

        } else {
            return back()
                ->withErrors(['msg' => 'У вас не достаточно денег'])
                ->withInput();
        }
    }

    public function edit(User $user)
    {
        return view('transfer.edit', compact('user'));
    }
}
