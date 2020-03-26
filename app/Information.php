<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['phone', 'email', 'manager_id'];

    // Cada registro referente a información de contacto, le pertenece a un solo cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
