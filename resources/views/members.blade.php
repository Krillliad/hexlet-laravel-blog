@extends('layouts.layout')

@section('content')
    <div class="members">
        @foreach($team as $member)
            <h2>{{ $member['name'] . ' - ' . $member['position'] }}</h2>
        @endforeach
    </div>
@endsection

