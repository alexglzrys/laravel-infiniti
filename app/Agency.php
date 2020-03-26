<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = ['name'];

    // Una agencia puede tener muchos clientes asociados
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
