@extends('layouts.master')

@section('content')

    <hr>

    <div>
        <h2>Ваша история переводов</h2>

        <hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">От кого</th>
                <th scope="col">Кому</th>
                <th scope="col">Сколько</th>
                <th scope="col">Когда</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transfers as $transfer)
            <tr>
                <th scope="row">{{ $transfer->id }}</th>
                <td>{{ $transfer->user->name }}</td>
                <td>{{ $transfer->wallet->user->name }}</td>
                <td>{{ $transfer->mount }}</td>
                <td>{{ $transfer->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
