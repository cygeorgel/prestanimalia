<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $guarded = [];

    public function sessions()
    {
        return $this->hasMany(TrainingSession::class);
    }

    public function upcomingSessions()
    {
        return $this->hasMany(TrainingSession::class)->where('start', '>', date('Y-m-d'));
    }
}
