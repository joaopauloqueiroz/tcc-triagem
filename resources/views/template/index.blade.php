
<!DOCTYPE html>
<html>
<head>
    
    <title>TCC</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script type="text/javascript" src="{{asset('js/template.js')}}"></script>
    <script src="{{asset('js/jquery-2.1.1.js')}}"></script>
   <script src="{{asset('js/materialize.min.js')}}"></script>
   <script src="{{asset('js/materialize.js')}}"></script>

<body>
    {{-- @inject('user', 'App\Http\Controllers\Pacientes\PacientsController') --}}
    
    
    <div class="box-menu" style="float: left; background-color:@yield('cor-barra');" id="menu-box-left">
        @yield('barra')
    </div>

    <div class="container-principal" style="float: right">
        <div class="box-top">
            @yield('identificador')
            
        </div>
        <div class="box-conteudo">
          @yield('content')
        </div>
    </div>
    
</body>
</html>