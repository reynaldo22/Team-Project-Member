<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name','title','content','user_id'
    ];

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
