@extends('layouts.master')
@section('content')
    <h1>Перевод</h1>

    <hr>

    <div class="form-group">
        <form method="POST" action="{{ route('transfer.update') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Выберите кому перевести</label>
                <input type="text" class="form-control" id="name" name="name">
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
