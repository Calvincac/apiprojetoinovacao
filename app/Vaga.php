<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model 
{
	protected $table = "vaga"; // define a tabela que será inserida
	
	public $timestamps = false; //retira as colunas updated e created_at 

	// atributo que define quais campos podem ser preenchidos no banco de dados
	protected $fillable = array('title', 'company', 'salary', 'description');

	// atributo responsável por impedir que seja enviado um id
	protected $guarded = ['ID'];

	// necessario especificar primary key devido a letra maiúscula
	protected $primaryKey = 'ID';

	public function categoria()
	{
        return $this->belongsTo('App\Categoria');
    }	

}
