@extends('layouts.admin.app')

@section('content')
    <h1>Bienvenido | {{session('USER')->name}}</h1>
    <p></p>
@endsection
