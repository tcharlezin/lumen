@extends("layout")

@section("content")

    <div class="col-md-6">
        <h3>Deseja realmente apagar este telefone?</h3>
        <small>{{ $telefone->descricao }} : {{ $telefone->numero }}</small>

        <form action="{{ route("telefone.destroy", ["id" => $telefone->id]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Apagar</button>
            <a href="{{route("agenda.index")}}" class="btn btn-primary">Voltar</a>
        </form>
    </div>
    <div class="col-md-6">
        @include("partials.contato")
    </div>

@endsection