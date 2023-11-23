<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
  protected $primaryKey = 'id';
   protected $fillable = [
        'name',
        'address',
        'age',
        'nic',
        'telephone',
    ];

    use HasFactory;
}
