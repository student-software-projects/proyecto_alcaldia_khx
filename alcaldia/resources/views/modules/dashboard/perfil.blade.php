@extends('layouts.admin.app')

@section('content')
    <h1>Estas en el Perfil | {{session('USER')->name}}</h1>
    <img src="http://lorempixel.com/200/200" alt="">
@endsection
