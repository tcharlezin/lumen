@extends("layout")

@section("content")

    <div class="col-md-6">
        <form action="{{route("pessoa.store")}}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                <div class="col-sm-10">
                    <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="M"> <i class="fa fa-male"></i>
                        </label>
                        <br/>
                        <label>
                            <input type="radio" name="sexo" value="F"> <i class="fa fa-female"></i>
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

@endsection