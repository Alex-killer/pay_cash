@extends('layouts.master')
@section('content')
    <h1>Здесь хранятся ваши кошельки</h1>
    <a class="btn btn-primary" href="{{ route('wallet.create') }}" role="button">Создать</a>

    <div class="form-group mt-3">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">Название</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Валюта</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->wallets as $wallet)
                <tr>
                    <td>{{ $wallet->name }}</td>
                    <td>{{ $wallet->mount }}</td>
                    <td>{{ $wallet->currency->title }}</td>
                    <td><a href="{{ route('wallet.edit', $wallet->id) }}">Пополнить</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>

    <hr>
@endsection
