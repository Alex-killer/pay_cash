@extends('layouts.master')
@section('content')

    @if($errors->any())
        @include('alerts.error')
    @endif

<form method="POST" action="{{ route('wallet.update', $wallet->id) }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <div class="text-right"><h2> RUB</h2></div>
        <div class="input-group mb-3">
            <input type="text" id="mount" name="mount" class="form-control" placeholder="Введите сумму" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit">Пополнить</button>
        </div>
    </div>
</form>
@endsection
