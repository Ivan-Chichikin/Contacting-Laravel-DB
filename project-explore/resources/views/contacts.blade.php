@extends('layouts.app')

@section('title-block')
Контакты
@endsection

@section('home')

<h1>Контакты</h1><br><br><br>

<form action="{{ route('contacts-form') }}" method="get">
    @csrf  <!-- csrf – ключ безопасности. проверка на то, что сообщение было отправлено пользователем, а не ботом -->
    <div class="form-group">
        Имя:<br>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control"><br>
        E-mail:<br>
        <input type="text" name="email" placeholder="Введите E-mail" id="email" class="form-control"><br>
        Тема:<br>
        <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control"><br>
        Сообщение:<br>
        <textarea name="message"; cols="40" rows="5" placeholder="Введите сообщение" id="message" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </div> 
</form> 

@endsection