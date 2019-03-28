<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
	
    protected $fillable = [
    	'name',
        'price',
    ];
	
	protected $dates = ['deleted_at'];


    public function sprints(){
    	return $this->hasMany(Sprint::class);
    }

    public function tasks(){
    	return $this->hasMany(Task::class);
    }
	
    // public function products(){
    //     return $this->belongsToMany(Product::class,'sale_product','sale_id','product_id')->withPivot('quantity');
    // }
}
