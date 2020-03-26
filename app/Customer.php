<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'agency_id', 'terms_and_conditions'];

    // Un cliente pertenece (se registra / asocia) a una agencia
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    // Un cliente tiene cierta información que lo identifica de forma única
    public function information()
    {
        return $this->hasOne(Information::class);
    }
}
