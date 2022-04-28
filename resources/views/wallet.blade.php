@extends('layouts.master')

@section('content')

    <h1>Перевод</h1>

    <hr>

    <form method="POST" action="{{ route('wallet.update', $wallet->id) }}">
        @csrf
        @method('PATCH')
        <label for="user_id">Выберите пользователя</label>
        <select class="form-control mb-3" id="user_id" name="user_id">
            <option selected>Выберите</option>
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" id="rub" name="rub" class="form-control" placeholder="Введите сумму перевода в рублях" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit">Пополнить</button>
                </div>
            </div>
    </form>
@endsection
