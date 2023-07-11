@extends('layouts.app')

@section('title-block')
{{ $data->subject }}
@endsection

@section('home')

<h1>#{{ $data->id }} {{ $data->subject }}</h1><br><br><br>

    <div class="alert alert-info">
    <!-- берём информацию из столбцов БД -->
        <p> {{ $data->message }}</p>
        <p> {{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('message-update', $data->id) }}"><button class="btn btn-warning">Редактировать</button></a>
        <a href="{{ route('message-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>

    </div>

@endsection