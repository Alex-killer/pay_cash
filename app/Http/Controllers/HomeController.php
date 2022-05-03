<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $transfers = Transfer::where('user_id', $user['id'])->get();

        return view('home', compact('transfers'));
    }

    public function update(HomeRequest $request)
    {

        $input = $request->all();
        $user = Auth::user()->wallet->rub;

        $sum['rub'] = $input['rub'] + $user;
        $user = Auth::user();

        $user->wallet()->update($sum);

        return redirect('/');
    }
}
