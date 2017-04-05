<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class VagaController extends Controller
{   
    public function listaVagas()
    {
        $vagas = DB::select('select * from vaga');
        return response()->json($vagas);
    }

}