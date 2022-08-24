<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscricaoController extends Controller
{
    function lista()
    {

        $lista = Inscricao::all();
        /* foreach (Inscricao::all() as $inscrito) {
            echo $inscrito->nome . '<br>';
        }
       */

        if ($lista === null) {
            return response()->json([
                'mensagem' => "Recurso pesquisado não existe.",
                'status' => "warning"
            ], 403);
        }

        return response()->json($lista, 200);
    }






    public function salvar(Request $request)
    {
        // Validate the request...
        $inscricao = new Inscricao();
        $dados = $request->input();

        $validator = Validator::make($dados, $inscricao->rules(),  [], $inscricao->niceName());

        if ($validator->fails()) {
            return response()->json($validator->messages(), 403);
        }

        $inscricao::create($dados);

        return response()->json([
            'mensagem' => "Cadastro Realizado com sucesso",
            'status' => "sucesso"
        ], 200);
    }
}
