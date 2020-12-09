@extends('layouts.layout')

@section('content')

    @if($member)

        <p>{{ $member->body }}</p>

    @endif

@endsection
