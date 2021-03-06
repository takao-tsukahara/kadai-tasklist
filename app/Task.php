<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
     protected $fillable = ['content', 'user_id'];

    public function User()
    {
        return $this->belongsTo(Users::class);
    }
    //
}
