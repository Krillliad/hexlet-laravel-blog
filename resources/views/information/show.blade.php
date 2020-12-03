@extends('layouts.layout')

@section('content')

    @if($information)

        <h2>{{$information->name}}</h2>
        <div>{{$information->body}}</div>

    @endif

@endsection
