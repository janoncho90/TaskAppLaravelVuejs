<?php

namespace App;

use App\Project;
use App\Task;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sprint extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'start_date',
        'end_date',
        'project_id'
    ];
    
    protected $dates = ['deleted_at'];
    
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }
    
}
