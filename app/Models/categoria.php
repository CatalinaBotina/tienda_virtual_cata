<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    
protected $table ='categorias';

protected $fillable = 
                'nombre',
                'descripcion'

};
public function producto()
{
    return $this ->hasMany (producto:: class, 'categoria_id');

}
