@extends('template.index')

@section('identificador')
        <h5 style="color: white;">HISTORICO</h5>
@endsection

@section('content')
{{dd($exame->exames)}}
<div class="container ">
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
        <td><a href="{{route('pacientes.exames', $exams->id)}}">VISUALIZAR</a></td>
      </tr>
    @endforeach

    
  </table>
</div>
@endsection