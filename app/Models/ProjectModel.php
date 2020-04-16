<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Carbon\Carbon;

class ProjectModel extends Model
{
    Protected $table = 'project';
    protected $fillable = ['categorie_id'];
    
    public function blogpost()
    {
        return $this->hasMany('App\Models\UpdateModel', 'project_id');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Models\CategorieModel', 'categorie_id');
    }
}
