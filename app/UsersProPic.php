<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProPic extends Model
{
    //
    protected $fillable = [
        'uid', 'pic_loc', 'created_at', 'updated_at'
    ];
}
