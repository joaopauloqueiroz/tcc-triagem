@extends('template.index')
@section('content')
<div class="container ">
  <h1>{{$titulo or 'Formulario'}}</h1>
        {{@$idade}} <br>
        {{@$pacientes->name}} <br>
        {{@$pacientes->name_pai}} <br>
        {{@$pacientes->name_mae}} <br>
        {{@$pacientes->sexo}} <br>
        {{@$pacientes->data_nacimento}} <br>
        <a href="{{route('exames.index', $pacientes->id)}}">Exames</a>
  </div>
@endsection