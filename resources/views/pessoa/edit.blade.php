@extends("layout")

@section("content")

    <div class="col-md-6">
        <form action="{{route("pessoa.update", ["id" => $pessoa->id])}}" method="post" class="form-horizontal">

            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" value="{{ $pessoa->nome }}">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                <div class="col-sm-10">
                    <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido" value="{{ $pessoa->apelido }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="M" {{  $pessoa->sexo == 'M' ? "checked" : null }}> <i class="fa fa-male"></i>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" name="sexo" value="F" {{  $pessoa->sexo == 'F' ? "checked" : null }}> <i class="fa fa-female"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        @include("partials.telefones", ["telefones" => $pessoa->telefones ])
    </div>

@endsection