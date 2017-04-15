<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model 
{
	 public function vaga()
	 {
        return $this->hasMany('App\Vaga');
     }

}
