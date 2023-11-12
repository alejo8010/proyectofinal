@extends('layouts.app')

@section('content')
<h1>Registrar curso</h1>
<form method="post" action="/cliente/compra">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre: ">
    <input type="text" name="especialidad" placeholder="Ingrese especialidad ">
    <input type="hidden" name="codigo" placeholder="Ingrese codigo">
    <input type="hidden" name="precio" placeholder="Ingrese precio ">
    <input type="submit" value="Guardar">
</form>
@endsection