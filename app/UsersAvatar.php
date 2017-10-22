<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersAvatar extends Model
{
    //
    protected $fillable = [
        'uid', 'avatar_loc', 'created_at', 'updated_at'
    ];
}
