@extends('template.index')
@section('identificador')
      <h5 style="color: #ffffff;">HISTORICO DE TRIAGEM</h5>
@endsection

@section('content')
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
    @foreach ($paciente->exames as $exames)
    <tr>
        <td>{{$exames->created_at}}</td>
        <td>{{$exames->urgencia}}</td>
        <td>{{$exames->pa1}} X {{$exames->pa2}}</td>
        <td>{{$exames->sat}}</td>
        <td>{{$exames->fc}}</td>
        <td>{{$exames->temperatura}}</td>
        <td>{{$exames->fr}}</td>
        <td><a href="{{route('pacients.show', $exames->id)}}">VISUALIZAR</a></td>
      </tr>
    @endforeach

    
  </table>

@endsection

@section('barra')
  @include('template.barra')
@endsection

