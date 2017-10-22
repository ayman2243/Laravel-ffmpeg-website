<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tsvideo extends Model
{
    //
    protected $fillable = 
    [
        'vid',
        'title',
        'user_id',
        'uniqe_name',
        'thumnail',
        'tags',
        'description',
        'privacy',
        'allow_comments',
        'allow_rate',
        'allow_embed',
        'is_18_age',
        'location',
        'language',
        'time',
        'upload_date',
        'is_anoutated',
        'is_special_ad'
    ];
}
