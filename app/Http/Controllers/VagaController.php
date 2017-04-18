<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Vaga;
use App\Categoria;

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
        $categoria = Categoria::find($vaga['categoria_id']);
        
        if (empty($vaga)) {
            throw new Exception("Esse produto não existe");
        }
        
        return Vaga::with('categoria')
        ->join('categoria', 'categoria.id', '=', 'vaga.categoria_id')
        ->get()->toJson(); 
        //response()->json($vaga);

    }

    public function remove($id)
    {
        $vaga = Vaga::find($id);
        $vaga->delete();
    }


}