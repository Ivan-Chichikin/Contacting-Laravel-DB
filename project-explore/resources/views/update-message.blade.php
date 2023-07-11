@extends('layouts.app')

@section('title-block')
Обновление: {{ $data->subject }}
@endsection

@section('home')

<h4>Обновление записи:</h4>
<h1>#{{ $data->id }} {{ $data->subject }}</h1><br><br><br>

<form action="{{ route('message-update-submit', $data->id) }}" method="post">
    @csrf  <!-- csrf – ключ безопасности. проверка на то, что сообщение было отправлено пользователем, а не ботом -->
    <div class="form-group">
        Имя:<br>
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control"><br>
        E-mail:<br>
        <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите E-mail" id="email" class="form-control"><br>
        Тема:<br>
        <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Введите тему" id="subject" class="form-control"><br>
        Сообщение:<br>
        <textarea name="message" cols="40" rows="5" placeholder="Введите сообщение" id="message" class="form-control">{{ $data->message }}</textarea><br>
        <button type="submit" class="btn btn-success">Обновить</button>
    </div> 
</form> 

@endsection