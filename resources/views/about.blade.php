@extends('layouts.app')

@section('title', 'Title-About')

@section('sidebar')
    @parent
    <p>Здесь полезные ссылки</p>
@endsection

@section('content')
    <h1>About Lara</h1>
    <p>Последовательность действий</p>
    @foreach($tags as $tag)
        <p>Первое: {{ $tag }}</p>
    @endforeach
@endsection
