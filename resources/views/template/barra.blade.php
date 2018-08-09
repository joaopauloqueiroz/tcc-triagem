
<p class="titulo">{{strtoupper($paciente->name)}}</p>
        <div class="dados-cliente">
            <i class="material-icons ">account_circle</i>
            <p class="descricao-cliente">IDADE: {{$idade}}</p>
            <p class="descricao-cliente">SEXO: {{$paciente->sexo}}</p>
            <p class="descricao-cliente">RG: <span>{{$paciente->rg}}</span> </p>
            <p class="descricao-cliente">CPF: <span>{{$paciente->cpf}}</span></p>
        </div>
        <div class="conjunto-botao">
            <a class="waves-effect waves-light btn-small btn-menu">INICIAR TRIAGEM</a>
        <a class="waves-effect waves-light btn-small btn-menu" href="{{route('pacients.index')}}">HISTÓRICO</a>
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