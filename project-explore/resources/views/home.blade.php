@extends('layouts.app')

@section('title-block')
Главная страница
@endsection

@section('home')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tenetur hic nisi repellat voluptatibus quod voluptate saepe distinctio unde maiores consequuntur similique, laudantium, officiis voluptatem alias mollitia ea asperiores pariatur!</p>
@endsection

@section('aside')
    @parent
    <p><i>Дополнительный текст</i></p>
@endsection