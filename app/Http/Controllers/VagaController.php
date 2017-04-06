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

    public function insereVaga()
    {
         $vaga = Request::all();

         $title = $vaga['title'];
         $company = $vaga['company'];
         $salary = $vaga['salary'];   
         $description = $vaga['description'];

        DB::insert(
            "insert into vaga (title,company,salary,description) 
        values (
            '{$title}','{$company}', '{$salary}' , '{$description}')"
         );        
    }

}