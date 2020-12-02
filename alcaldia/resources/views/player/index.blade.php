@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-4 mb-3" href="{{route('player.create')}}">CREAR NUEVO JUGADOR</a>
            @if(session('message'))
                <div class="alert alert-{{session('type')}}" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-resposive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>NUMERO DE CAMISA</th>
                        <th>APODO</th>
                        <th>EQUIPO</th>
                        <th>FECHA CREACION</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($players as $player)

                        <tr>
                            <td>{{$player->id}} </td>
                            <td>{{$player->name}} </td>
                            <td>{{$player->lastname}} </td>
                            <td>{{$player->shirt_number}} </td>
                            <td>{{$player->nickname}} </td>
                            <td> {{$player->team_id}} </td>
                            <td>{{$player->created_at}} </td>
                            <td>
                                <form action="{{ route('player.destroy',$player->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('player.show',$player->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('player.edit',$player->id) }}"class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submint" class="btn btn-sm btn-danger">Eliminar</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
