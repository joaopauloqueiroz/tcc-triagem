@extends('template.index')

@section('identificador')



@endsection
@section('barra')
  @include('template.barra')
@endsection

@section('content')
<div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
@endsection