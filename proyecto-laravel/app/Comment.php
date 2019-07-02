<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    // Relación de Many to One / de muchos a uno
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Relación de Many to One / de muchos a uno
    public function image(){
        return $this->belongsTo('App\Image');
    }
}
