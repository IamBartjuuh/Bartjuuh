<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpdateModel extends Model
{
    Protected $table = 'blogpost';

    public function project()
    {
        return $this->belongsTo('App\Models\ProjectModel', 'project_id');
    }
}
