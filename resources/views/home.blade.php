@extends('layouts.master')

@section('content')

    <hr>

    <div>
        <h2>Ваша история переводов</h2>

        <hr>

    </div>
{{--        <h2>Валютный счет</h2>--}}
{{--        <div class="text-right"><h2>{{ $user->usd }} USD</h2></div>--}}
{{--        <div class="input-group mb-3">--}}
{{--            <input type="text" class="form-control" placeholder="Введите сумму" aria-label="Recipient's username" aria-describedby="button-addon2">--}}
{{--            <button class="btn btn-outline-secondary" type="button" id="usd" name="usd">Пополнить</button>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="title">Название</label>--}}
{{--            <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder="Название">--}}

{{--            @error('title')--}}
{{--            <p class="text-danger">{{ $message }}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
