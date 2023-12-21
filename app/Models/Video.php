<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class  Video  extends  Model
{
    use  HasFactory;

    protected  $connection = 'mongodb';

    protected  $collection = 'videos';

    protected  $fillable = [
        'title',
        'description',
        'yt-link'
    ];
}