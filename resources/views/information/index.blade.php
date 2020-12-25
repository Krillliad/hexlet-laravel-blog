@extends('layouts.layout')

@section('content')
    {{ Form::open(['url' => route('information.index'), 'method' => 'get']) }}
        {{ Form::text('search') }}
        {{ Form::submit('Search') }}
    {{ Form::close() }}
    <div class="button-create">
        <a href="{{ route('information.create') }}">Создать запись</a>
    </div>
    <div class="title">
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
                <div class="edit-button">
                    <a href="{{ route('information.edit', ['id' => $information->id]) }}">Редактировать запись</a>
                </div>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['information.destroy', $information->id]
                    ]) !!}
                        {!! Form::submit('Delete this task?', ['class' => 'edit-button']) !!}
                {!! Form::close() !!}
            </div>
        @endforeach
    </div>
@endsection
