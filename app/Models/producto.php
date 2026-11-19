<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table ='producto';

protected $fillable = {
                'nombre',
                'descripcion',
                'precio',
                'stock',
                'imagen',
                'categoria_id',

};
public function categorias ()
{
    return $this ->hasMany (categoria:: class, 'categoria_id');

}


}

}
