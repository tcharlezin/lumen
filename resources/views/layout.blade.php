<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeAgenda</title>
    <link href="{{url('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <a href="{{route("agenda.index")}}">
                <h1>Code.Education <br/>
                    <small><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</small>
                </h1>
            </a>
            <span class="pull-right">
                <form class="form-inline" action="{{ route("agenda.busca") }}" method="post">
                    <div class="input-group">
                          <input type="text" name="busca" class="form-control" placeholder="Pesquisar contato...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                          </span>
                    </div>
                </form>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach($letras as $letra)
                <a href="{{ route("agenda.letra", ["letra"=> $letra]) }}" class="btn btn-primary btn-xs"> {{ $letra }}</a>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="{{ route("pessoa.create") }}" class="btn btn-primary">Novo Contato</a>
        </div>
    </div>
    <div class="row">
        @yield("content")
    </div>
</div>
<script src="{{url('js/scripts.js')}}"></script>
</body>
</html>