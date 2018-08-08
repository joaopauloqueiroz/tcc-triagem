@extends('template.index') 
@section('content')
<div class="container ">
  <h1>{{$titulo or 'Formulario'}}</h1>
  <table class="table-striped">
    <tr>
      <th>Data</th>
      <th>Urgencia</th>
      <th>&nbsp;&nbsp;&nbsp;PA</th>
      <th>SAT</th>
      <th>FC</th>
      <th>TEMPERATURA</th>
      <th>FR</th>
      <th>AÇÃO</th>
    </tr>
    @foreach ($exame as $exams)
    <tr>
        <td>{{$exams->created_at}}</td>
        <td>{{$exams->urgencia}}</td>
        <td>{{$exams->pa1}} X {{$exams->pa2}}</td>
        <td>{{$exams->sat}}</td>
        <td>{{$exams->fc}}</td>
        <td>{{$exams->temperatura}}</td>
        <td>{{$exams->fr}}</td>
        <td><a href="">VISUALIZAR</a></td>
      </tr>
    @endforeach
  </table>
</div>
@endsection