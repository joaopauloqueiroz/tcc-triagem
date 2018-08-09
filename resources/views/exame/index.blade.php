@extends('template.index')
@section('identificador')
  <p style="float:left;">DETALHES</p>
      
@endsection

@section('cor-barra')
{{$color or  '#828282'}}
@endsection

@section('barra')
  @include('template.barra')
@endsection

@section('content')
      
       <table class="table-striped"  >
         <tr>
           <th>QUEIXA</th>
           <th>ALERGIAS</th>
           <th>URGENCIA</th>
           <th>&nbsp;&nbsp;&nbsp;PA</th>
           <th>FC</th>
           <th>TEMPERATURA</th>
           <th>SAT</th>
           <th>FR</th>
           <th>PROTOCOLO</th>
           <tr>
             <td>{{$exame->queixa}}</td>
             <td>{{$exame->alergias}}</td>
             <td>{{$exame->urgencia}}</td>
             <td>{{$exame->pa1}} X {{$exame->pa2}}</td>
             <td>{{$exame->fc}}</td>
             <td style="padding-left: 2%;">{{$exame->temperatura}}</td>
             <td style="padding-left: 5px;">{{$exame->sat}}</td>
             <td>{{$exame->fr}}</td>
             <td>{{$exame->protocolos->name}}</td>
           </tr>
         </tr>
       </table>
@endsection