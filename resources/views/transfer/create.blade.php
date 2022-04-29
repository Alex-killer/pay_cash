@extends('layouts.master')
@section('content')
    <h1>Выполняется перевод: {{ $user->name }}</h1>

    <hr>

    <div class="form-group">
        <form method="POST" action="{{ route('transfer.store') }}">
            @csrf
            <div class="mb-3">
                <label for="wallet_id" class="form-label">Выберите кошелек</label>
                <select class="custom-select" id="wallet_id" name="wallet_id">
                    @foreach($user->wallets as $wallet)
                        <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" id="mount" name="mount" class="form-control" placeholder="Введите сумму" aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
            <button type="submit" class="btn btn-primary">Перевести</button>
        </form>
    </div>
@endsection
