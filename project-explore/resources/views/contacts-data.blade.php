@extends('layouts.app')

@section('title-block')
Обращения
@endsection

@section('home')

<h1>Обращения</h1><br><br><br>

@foreach($data as $elem)
    <div class="alert alert-info">
        <h5>{{ $elem->subject }}</h5> <!-- берём информацию из столбцов БД -->
        <p># {{ $elem->id }}</p>
        <p><small>{{ $elem->created_at }}</small></p>
        <a href="{{ route('contacts-data-one', $elem->id) }}"><button class="btn btn-warning">Перейти</button></a>
    </div>
@endforeach

@endsection