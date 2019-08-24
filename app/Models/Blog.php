<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $table = 'blogs'; 
    
    protected $fillable = [
        'title',
        'content',
        'user_id'];

    
    public function user()
    {
         return $this->belongsToMany('App\User','user_id');
    }

}
