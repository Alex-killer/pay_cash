@extends('layouts.master')
@section('content')
    <h1>Здесь хранятся ваши кошельки</h1>
    <a class="btn btn-primary" href="{{ route('wallet.create') }}" role="button">Создать</a>

    <hr>
@endsection
