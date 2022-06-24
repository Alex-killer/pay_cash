@extends('layouts.master')
@section('content')
    <h1>Кому хотите перевести?</h1>

    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    @endif

    <hr>

    <div>
        @foreach($users as $user)
            <ul><h2><a href="{{ route('transfer.create', $user->id) }}">{{ $user->name }}</a></h2></ul>
        @endforeach
    </div>
@endsection
