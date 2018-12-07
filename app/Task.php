<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // mass-assignable attrs
    protected $fillable=['name'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
