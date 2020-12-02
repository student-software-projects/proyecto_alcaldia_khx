@extends('layouts.admin.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-5">
            <form action="{{route('locality.store')}}" method="post">
                @csrf
                <div class="form-group mt-5">
                    <label for="locality">Nombre de la localidad</label>
                    <input name="locality" id="locality" type="text" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR NUEVA LOCALIDAD</button>
                <a class="btn btn-secondary" href="{{route('locality.index')}}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>

@endsection
