@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mb-3">
            <div class="table-responsive">
                <table class="table table-bodered">
                    <tr>
                        <th>Nombre del producto</th>
                       <td>{{$locality->locality}}</td>
                    </tr>
                    <tr>
                        <th>CREACION</th>
                        <td>{{$locality->created_at}}</td>
                    </tr>
                    <tr>
                        <th>ACTUALIZACION</th>
                        <td>{{$locality->updated_at}}</td>
                    </tr>

                </table>
                <a class="btn btn-secondary" href="{{route('locality.index')}}">volver</a>
                <a href="{{ route('locality.edit',$locality->id) }}"class="btn  btn-warning">Editar</a>
            </div>
        </div>
    </div>
</div>
@endsection


