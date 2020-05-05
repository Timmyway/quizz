<?php

namespace App\Model;
use App\User;
use App\Question;
use App\Like;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
