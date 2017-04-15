<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Vaga;

class VagaController extends Controller
{   
    public function listaVagas()
    {
        //$vagas =  Vaga::all(); 
        // método ORM que busca tudo da tabela relacionando com categorias 
        return Vaga::with('categoria')->get()->toJson();
    }

    public function insereVaga()
    {
         $params = Request::all(); // pega tudo que foi enviado na requisicao post
         $vaga = new Vaga($params); 
         $vaga->save();//insere vaga no banco de dados   
             
    }

    public function mostra($id)
    {
        $vaga =  Vaga::find($id);

        if (empty($vaga)) {
            throw new Exception("Esse produto não existe");
        }
        
        return response()->json($vaga);

    }

    public function remove($id)
    {
        $vaga = Vaga::find($id);
        $vaga->delete();
    }


}