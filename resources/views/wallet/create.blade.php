@extends('layouts.master')
@section('content')
    <h1>Создайте новый кошелек</h1>

    <hr>
    <div class="form-group">
        <form method="POST" action="{{ route('wallet.store') }}">
            <div class="mb-3">
                <label for="title" class="form-label">Введите название кошелька</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="currency_id" class="form-label">Выберите валюту</label>
                <select class="custom-select" id="currency_id" name="currency_id">
                    @foreach($currencies as $currency)
                    <option value="{{ $currency->id }}">{{ $currency->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
