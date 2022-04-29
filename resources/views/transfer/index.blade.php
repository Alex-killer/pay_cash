@extends('layouts.master')
@section('content')
    <h1>Перевод</h1>

    <hr>

    <div>
        @foreach($wallets as $wallet)
            <ul><h2><a href="{{ route('transfer.create', $wallet->id) }}">{{ $wallet->user->name }}</a></h2></ul>
        @endforeach
    </div>
@endsection
