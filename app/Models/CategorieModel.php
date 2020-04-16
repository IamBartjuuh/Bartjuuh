<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieModel extends Model
{
    Protected $table = 'categorie';
    
    public function project()
    {
        return $this->hasMany('App\Models\ProjectModel', 'categorie_id');
    }
}
