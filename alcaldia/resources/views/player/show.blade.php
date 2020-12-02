@extends('layouts.admin.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mb-3">
            <div class="table-responsive">
                <table class="table table-bodered">
                    <tr>
                        <th>Nombre del jugador</th>
                        <td>{{$player->name}}</td>
                    </tr>
                    <tr>
                        <th>Apellido del jugador</th>
                        <td>{{$player->lastname}}</td>
                    </tr>
                    <tr>
                        <th>Numero de camisa</th>
                        <td>{{$player->shirt_number}}</td>
                    </tr>
                    <tr>
                        <th>Apodo del jugador</th>
                        <td>{{$player->nickname}}</td>
                    </tr>
                    <tr>
                        <th>Equipo</th>

                        <td>vacio</td>

                    </tr>
                    <tr>
                        <th>CREACION</th>
                        <td>{{$player->created_at}}</td>
                    </tr>
                    <tr>
                        <th>ACTUALIZACION</th>
                        <td>{{$player->updated_at}}</td>
                    </tr>

                </table>
                <a class="btn btn-secondary" href="{{route('player.index')}}">volver</a>
                <a href="{{ route('player.edit',$player->id) }}"class="btn  btn-warning">Editar</a>
            </div>
        </div>
    </div>
</div>
@endsection


