@extends('layouts.admin.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mb-3">
            <div class="table-responsive">
                <table class="table table-bodered">
                    <tr>
                        <th>Nombre del equipo</th>
                        <td>{{$team->name_team}}</td>
                    </tr>
                    <tr>
                        <th>logo</th>
                        <td><img src="{{$team->logo}}" alt=""></td>
                    </tr>
                    <tr>
                        <th>Localidad</th>

                        <td>vacio</td>

                    </tr>
                    <tr>
                        <th>CREACION</th>
                        <td>{{$team->created_at}}</td>
                    </tr>
                    <tr>
                        <th>ACTUALIZACION</th>
                        <td>{{$team->updated_at}}</td>
                    </tr>

                </table>
                <a class="btn btn-secondary" href="{{route('team.index')}}">volver</a>
                <a href="{{ route('team.edit',$team->id) }}"class="btn  btn-warning">Editar</a>
            </div>
        </div>
    </div>
</div>
@endsection


