@extends('layouts.app')
@section('content')
    @foreach ($data as $team)
        <ul>
            <li>{{$team->nome}}</li>
            <li>{{$team->fantamilioni}}</li>
            <li>{{$team->fantallenatore}}</li>
        </ul>
    @endforeach
@endsection
