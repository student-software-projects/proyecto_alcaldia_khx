@extends('layouts.admin.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-5">
            <form action="{{route('player.update',$player->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mt-5">
                    <label for="name">Nombre del jugador</label>
                    <input name="name" id="name" type="text" class="form-control" value="{{$player->name}}">
                </div>
                <div class="form-group mt-5">
                    <label for="lastname">Apellido del jugador</label>
                    <input name="lastname" id="lastname" type="text" class="form-control" value="{{$player->lastname}}">
                </div>
                <div class="form-group mt-5">
                    <label for="shirt_number">Numero de camisa</label>
                    <input name="shirt_number" id="shirt_number" type="text" class="form-control" value="{{$player->shirt_number}}">
                </div>
                <div class="form-group mt-5">
                    <label for="nickname">Apodo del jugador</label>
                    <input name="nickname" id="nickname" type="text" class="form-control" value="{{$player->nickname}}">
                </div>
                <div class="form-group mt-5">
                    <label for="team_id">equipo</label>
                    <select name="team_id" id="team_id" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name_team}}"</option>
                        @endforeach
                    </select>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR NUEVO EQUIPO</button>
                <a class="btn btn-secondary" href="{{route('player.index')}}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>

@endsection
