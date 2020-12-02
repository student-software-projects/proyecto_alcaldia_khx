@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-4 mb-3" href="{{route('team.create')}}">CREAR NUEVO EQUIPO</a>
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
                        <th>NOMBRE DE EQUIPO</th>
                        <th>LOGO</th>
                        <th>LOCALIDAD</th>
                        <th>FECHA CREACION</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <td>{{$team->id}} </td>
                            <td>{{$team->name_team}} </td>
                            <td><img src="{{$team->logo}}" alt=""></td>

                            <td>{{$team->locality_id}}</td>

                            <td>{{$team->created_at}} </td>
                            <td>
                                <form action="{{ route('team.destroy',$team->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('team.show',$team->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('team.edit',$team->id) }}"class="btn btn-sm btn-warning">Editar</a>
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
