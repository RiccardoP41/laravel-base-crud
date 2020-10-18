@extends('layouts.app')
@section('content') 
        <ul>
            <li>{{$team->nome}}</li>
            <li>{{$team->fantamilioni}}</li>
            <li>{{$team->fantallenatore}}</li>
        </ul>
@endsection
