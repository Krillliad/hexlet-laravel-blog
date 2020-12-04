@extends('layouts.layout')

@section('content')
    <div class="members">
        @foreach($team as $member)
            <h2>
                <a href="{{ route('members.show', ['id' => $member->id]) }}" class="info-links">
                    {{ $member->name . ' - ' . $member->position }}
                </a>
            </h2>
        @endforeach
    </div>
@endsection

