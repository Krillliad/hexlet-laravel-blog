@extends('layouts.layout')

@section('content')
    <div class="news">
        <h1>Список новостей</h1>
        @foreach($informational as $information)
            <h2>
                <a href="{{ route('information.show', ['id' => $information->id]) }}">{{ $information->name }}</a>
            </h2>
            <div>{{ Str::limit($information->body, 200) }}</div>
        @endforeach
    </div>
@endsection
