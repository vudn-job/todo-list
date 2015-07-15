<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{

    protected $table = 'project';
    protected $fillable = ['project_name', 'description'];
    protected $guarded = ['id'];
    
    public function tasks() {
        return $this->hasMany('App\Task');
    }

}
