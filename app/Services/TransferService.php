<?php


namespace App\Services;


use Illuminate\Support\Facades\Auth;

class TransferService
{
    public function update($userWallet, $wallet, $input, $inputWallet, $currencyTransfer, $currencies)
    {
        if ($userWallet->currency_id == $wallet->currency_id){
            $sum['mount'] = $input['mount'] + $wallet['mount'];
            $sumUser['mount'] =  $userWallet['mount'] - $inputWallet['mount'];
        } else  {
            $sum['mount'] = ($currencyTransfer / $currencies) * $input['mount'] + $wallet['mount'];
            $sumUser['mount'] =  $userWallet['mount'] - $inputWallet['mount'];
        }

        $user = Auth::user();

        $user->transfers()->create($input);
        //        $userWallet->mount = $sumUser;
        //        $userWallet->save();
        $userWallet->update($sumUser);
        $wallet->update($sum);
    }
}
