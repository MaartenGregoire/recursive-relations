<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'parent_id'];
    public $timestamps = false;

    public function parent(){
        return $this->belongsTo('App\Group', 'parent_id', 'id');
    }

    public function children(){
        return $this->hasMany('App\Group', 'parent_id', 'id');
    }

    public function allChildren(){
        return $this->children()->with('allChildren');
    }

    public function allParents(){
        return $this->parent()->with('allParents');
    }


}
