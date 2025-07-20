<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerProfile extends Model
{
    //
    protected $fillable = [
        'name', 'position', 'height', 'weight', 'school', 'bio', 'video_url'
    ];
}
