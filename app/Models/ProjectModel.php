<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Carbon\Carbon;

class ProjectModel extends Model
{
    Protected $table = 'project';

    public function blogpost()
    {
        return $this->hasMany('App\Models\UpdateModel', 'project_id');
    }
}
