@extends('layouts.layout')

@section('content')
    <div class="title">
        <h1>Наша команда</h1>
    </div>
    <div class="members">
        @foreach($team as $member)
            <div class="team-block">
                <h2>{{ $member->name . ' - ' . $member->position }}</h2>
                <p>{{ $body }}</p>
                <div class="team-button">
                    <a href="{{ route('members.show', ['id' => $member->id]) }}" class="info-links">Подробнее</a>
                </div>
            </div>

        @endforeach
    </div>
@endsection

