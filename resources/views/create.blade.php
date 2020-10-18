@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{(!empty($team)) ? route('teams.update',$team->id): route('teams.store')}}" method="post">
        @csrf
        @if(!empty($team))
            @method ('PATCH')
            <input type="hidden" name="id" value={{$team->id}}>

        @else
            @method('POST')
        @endif
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Nome" id="nome" value={{(!empty($team)) ? $team->nome : old("nome")}}>
        <label for="fm">Fantamilioni</label>
        <input type="text" name="fantamilioni" placeholder="Fantamilioni" id="fm" value={{(!empty($team)) ? $team->fantamilioni : old("fm")}}>
        <label for="fa">Fantallenatore</label>
        <input type="text" name="fantallenatore" placeholder="Fantallenatore" id="fa" value={{(!empty($team)) ? $team->fantallenatore : old("fa")}}>
        <input type="submit" value="Invia">
    </form>
@endsection
