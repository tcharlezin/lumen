<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{
    public function create()
    {
        return view("pessoa.create");
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);

        return view("pessoa.edit", compact("pessoa"));
    }

    public function update(Request $request, $id)
    {
        try
        {
            $pessoa = Pessoa::find($id);

            $validator = Validator::make($request->all(), [
                "nome" => "required|min:3|max:255|unique:pessoas,nome," . $pessoa->id,
                "apelido" => "required|min:2|max:50",
                "sexo" => "required",
            ]);

            if($validator->fails())
            {
                // throw new \Exception("Não passou na validação. Nesta versão do Lumen, não há suporte à sessões por isso não foi implementado!");
            }

            $pessoa->update($request->all());
            $letra = strtoupper(substr($pessoa->apelido, 0, 1));

            return redirect()->route("agenda.letra", ["letra" => $letra]);
        }
        catch (\Exception $ex)
        {
            die($ex->getMessage());
        }
    }

    public function store(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                "nome" => "required|min:3|max:255|unique:pessoas",
                "apelido" => "required|min:2|max:50",
                "sexo" => "required",
            ]);

            if($validator->fails())
            {
                // throw new \Exception("Não passou na validação. Nesta versão do Lumen, não há suporte à sessões por isso não foi implementado!");
            }

            $dados = $request->all();
            $pessoa = Pessoa::create($dados);
            $letra = strtoupper(substr($pessoa->apelido, 0, 1));

            return redirect()->route("agenda.letra", ["letra" => $letra]);
        }
        catch (\Exception $ex)
        {
            die($ex->getMessage());
        }
    }

    public function delete($id)
    {
        $pessoa = Pessoa::find($id);
        return view("pessoa.delete", compact("pessoa"));
    }

    public function destroy($id)
    {
        Pessoa::destroy($id);
        return redirect()->route("agenda.index");
    }
}
