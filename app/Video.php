<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'video';

    protected $fillable = [
        'video_id',
        'name',
        'running_time',
        'genre',
        'country',
    ];
}
