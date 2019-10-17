@extends('layouts.app')

@section('title', 'Articles')

@section('sidebar')
    @parent
    <p>Про статьи</p>
@endsection

@section('content')
    <h1>Articles</h1>
    <p>Статьи</p>
    @foreach($articles as $article)
        <p>{{ $article }}</p>
    @endforeach
@endsection
