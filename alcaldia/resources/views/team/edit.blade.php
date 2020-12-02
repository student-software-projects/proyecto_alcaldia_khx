@extends('layouts.admin.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-5">
            <form action="{{route('team.update',$team->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mt-5">
                    <label for="name_team">Nombre del equipo</label>
                    <input name="name_team" id="name_team" type="text" value="{{$team->name_team}}" class="form-control">
                </div>
                <div class="form-group mt-5">
                    <label for="logo">url logo del equipo</label>
                    <input name="logo" id="logo" type="text"  class="form-control" value="{{$team->logo}}">
                </div>
                <div class="form-group mt-5">
                    <label for="locality_id">Localidad</label>
                    <select name="locality_id" id="locality_id" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($localities as $locality)
                            <option value="{{$locality->id}}">{{$locality->locality}}</option>
                        @endforeach
                    </select>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">ACTUALIZAR EQUIPO</button>
                <a class="btn btn-secondary" href="{{route('team.index')}}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>

@endsection
