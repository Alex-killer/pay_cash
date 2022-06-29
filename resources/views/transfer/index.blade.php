@extends('layouts.master')
@section('content')
    <h1>Кому хотите перевести?</h1>

    @if(session('success'))
        @include('alerts.success')
    @endif

    <hr>

    <div>
        @foreach($users as $user)
            <ul><h2><a href="{{ route('transfer.create', $user->id) }}">{{ $user->name }}</a></h2></ul>
        @endforeach
    </div>
@endsection
