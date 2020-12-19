<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      'client_name', 
      'cpf',
      'cnpj',
      'phone',
      'street',
      'neighborhood',
      'city',
      'state',
      'gender',
      'birth',
      'product',
      'ps',
      'description',
      'delivery'
    ];
}
