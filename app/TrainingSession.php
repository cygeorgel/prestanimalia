<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    protected $guarded = [];

    protected $dates = ['start', 'end'];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
