@extends('layouts.layout')

@section('content')
        <div class="news-title">
            <h1>Список новостей</h1>
        </div>
        <div class="news">
        @foreach($informational as $information)
            <div class="information-block">
                <h2>{{ $information->name }}</h2>
                <div>{{ Str::limit($information->body, 200) }}</div>
                <div class="info-button">
                    <a href="{{ route('information.show', ['id' => $information->id]) }}">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
