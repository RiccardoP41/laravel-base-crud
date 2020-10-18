@extends('layouts.app')
@section('content')
    @foreach ($data as $team)
        <ul>
            <a href="{{route('teams.show', $team->id)}}"><li>{{$team->nome}}</li></a>
            <li>{{$team->fantamilioni}}</li>
            <li>{{$team->fantallenatore}}</li>
            <li>
                <form class="" action="{{route("teams.destroy", $team->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit"  value="Cancella">



            </form> </li>
        </ul>
    @endforeach
@endsection
