@extends('layouts.master')
@section('content')
    <h1>Выполняется перевод: {{ $user->name }}</h1>

    <hr>

    <div class="form-group">
        @if($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        {{ $errors->first() }}
                    </div>
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('transfer.store') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="userWallet_id" class="form-label">Выберите счет с которого будите переводить</label>
                <select class="custom-select"
                        id="userWallet_id"
                        name="userWallet_id">
                    @foreach($userWallet->wallets as $wallet)
                        <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="wallet_id"
                       class="form-label">Выберите кошелек</label>
                <select class="custom-select"
                        id="wallet_id"
                        name="wallet_id">
                    @foreach($user->wallets as $wallet)
                        <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <input type="number"
                       step="0.01"
                       id="mount"
                       name="mount"
                       class="form-control"
                       placeholder="Введите сумму"
                       aria-describedby="button-addon2"
                       required>
                @error('mount')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Перевести</button>
        </form>
    </div>
@endsection
