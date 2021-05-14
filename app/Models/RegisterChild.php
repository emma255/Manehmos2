<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterChild extends Model
{
    protected $fillable = [
        'tarehe_ya_kuandikishwa', 'namba_ya_usajili_RITA', 'jina_la_mtoto', 'namba_ya_mtoto', 'jinsia', 'namba_ya_HEID', 'jina_la_mama', 'mahali_anapoishi_mtoto',
    ];

    protected $guarded = [];
}
