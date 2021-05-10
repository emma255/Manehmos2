<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterMaternal extends Model
{
    protected $guarded = [];

    public function attendings()
    {
        return $this->hasMany(Register6::class, 'maternal_id');
    }
}
