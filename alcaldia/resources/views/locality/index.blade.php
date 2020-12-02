@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-4 mb-3" href="{{route('locality.create')}}">CREAR NUEVA LOCALIDAD</a>
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
                        <th>LOCALIDAD</th>
                        <th>FECHA CREACION</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($localities as $locality)
                        <tr>
                            <td>{{$locality->id}} </td>
                            <td>{{$locality->locality}} </td>
                            <td>{{$locality->created_at}} </td>
                            <td>
                                <form action="{{ route('locality.destroy',$locality->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('locality.show',$locality->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('locality.edit',$locality->id) }}"class="btn btn-sm btn-warning">Editar</a>
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

