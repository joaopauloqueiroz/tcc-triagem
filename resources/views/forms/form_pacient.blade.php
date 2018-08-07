@extends('template.index')
@section('content')
<div class="container ">
  <h1>{{$titulo or 'Formulario'}}</h1>
    <form action="" class="form">
        <div class="form-group">
          <label for="">Nome:</label>
            <input type="text">
        </div>
        <div class="form-group">
          <label for="">Idade</label>
            <input type="text">
          
        </div>
        <div class="form-group">
          <label for="">Sexo</label>
            <input type="text">
         
        </div>
        <div class="form-group">
          <label for="">Pai</label>
            <input type="text">
          
        </div>
        <div class="form-group">
          <label for="">Mãe</label>
            <input type="text">
          
        </div>
        <div class="form-group">
          <label for="">Data de Nacimento</label>
            <input type="text">
          
        </div>
        <div class="form-group">
            <label for="">Rg</label>
              <input type="text">
            
        </div>
        <div class="form-group">
            <label for="">Cpf</label>
              <input type="text">
            
        </div>
        <div class="form-group">
            <label for="">Cidade</label>
              <input type="text">
            
        </div>
        <div class="form-group">
            <label for="">Estado</label>
              <input type="text"> 
        </div>
      
      </form>
</div>
@endsection