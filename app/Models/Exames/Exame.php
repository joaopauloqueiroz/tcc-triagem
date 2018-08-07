<?php

namespace App\Models\Exames;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exame extends Model
{
    //fillable

    public function protocols()
    {
        return HasMany('App\Models\Protocolos\Protocol');
    }
}
