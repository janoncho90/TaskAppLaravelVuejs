<?php

namespace App;

use App\Project;
use App\Sprint;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'days_quantity',
        'project_id',
        'sprint_id'
    ];

    protected $dates = ['deleted_at'];

    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }

    public function spring(){
        return $this->belongsTo(Sprint::class,'sprint_id');
    }
}
