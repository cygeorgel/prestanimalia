<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function session()
    {
        return $this->belongsTo(TrainingSession::class);
    }
}
