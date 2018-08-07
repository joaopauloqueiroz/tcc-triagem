
<!DOCTYPE html>
<html>
<head>
    
    <title>TCC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script type="text/javascript" src="{{asset('js/template.js')}}"></script>
    <script src="{{asset('js/jquery-2.1.1.js')}}"></script>
   <script src="{{asset('js/materialize.min.js')}}"></script>
   <script src="{{asset('js/materialize.js')}}"></script>

<body>

    <div class="box-menu" style="float: left" id="menu-box-left">
        <p class="titulo">MARIA JOSE DA SILVA</p>
        <div class="dados-cliente">
            <i class="material-icons ">account_circle</i>
            <p class="descricao-cliente">IDADE: 22</p>
            <p class="descricao-cliente">SEXO: M</p>
            <p class="descricao-cliente">RG: <span>58.579.269-0</span> </p>
            <p class="descricao-cliente">CPF: <span>134.789.246-00</span></p>
        </div>
        <div class="conjunto-botao">
            <a class="waves-effect waves-light btn-small btn-menu">INICIAR TRIAGEM</a>
            <a class="waves-effect waves-light btn-small btn-menu">HISTÓRICO</a>
            <a class="waves-effect waves-light btn-small btn-menu">DADOS PESSOAIS</a>
            <a class="waves-effect waves-light btn-small btn-menu">EXAMES</a>
            <a class="waves-effect waves-light btn-small btn-menu">FLUXO</a>
        </div>
        <div class="manchester">
            <p class="titulo">CLASSIFICAÇÃO DE MANCHESTER</p>
            <a class="seta-esquerda " style="color: #2F80ED"></a>
            <a href="#" class="waves-effect waves-light btn-small z-depth-0 btn-triagem" style="background-color: #2F80ED" onclick="colorBar(this);">NÃO URGENTE</a>
            <a href="#" onclick="colorBar(this);" class="seta-esquerda " style="color: #219653"></a>
            <a href="#" onclick="colorBar(this);" class="waves-effect waves-light btn-small z-depth-0 btn-triagem" style="background-color: #219653">POUCO URGENTE</a>
            <a href="#" onclick="colorBar(this);" class="seta-esquerda " style="color: #D9EC03"></a>
            <a href="#" onclick="colorBar(this);" class="waves-effect waves-light btn-small z-depth-0 btn-triagem" style="background-color: #D9EC03">URGENTE</a>
            <a class="seta-esquerda " style="color: #E4AC02"></a>
            <a href="#" onclick="colorBar(this);" class="waves-effect waves-light btn-small z-depth-0 btn-triagem" style="background-color: #E4AC02">MUITO URGENTE</a>
            <a class="seta-esquerda "style="color: #F70000"></a>
            <a href="#" onclick="colorBar(this);" class="waves-effect waves-light btn-small z-depth-0 btn-triagem" style="background-color: #F70000">EMERGÊNCIA</a>
        </div>

    </div>

    <div class="container-principal" style="float: right">
        <div class="box-top">

        </div>
        <div class="box-conteudo">
          @yield('content')
        </div>
    </div>
    
</body>
</html>