<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = [
    //     'image_at','place',
    // ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

}
