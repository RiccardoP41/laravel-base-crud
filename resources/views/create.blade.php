@extends('layouts.app')
@section('content')
    <form action="{{route('teams.store')}}" method="post">
        @csrf
        @method('POST')
        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="Nome" id="name" value={{old("name")}}>
        <label for="fm">Fantamilioni</label>
        <input type="text" name="fm" placeholder="Fantamilioni" id="fm" value={{old("fm")}}>
        <label for="fa">Fantallenatore</label>
        <input type="text" name="fa" placeholder="Fantallenatore" id="fa" value={{old("fa")}}>
        <input type="submit" value="Invia">
    </form>
@endsection
