<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{

//     protected $table = 'customers';
//   protected $primaryKey = 'id';

   protected $fillable = [
        'customer_id',
        'name',
        'address',
        'age',
        'nic',
        'telephone',
    ];

    use HasFactory;

    public function addresses()
    {
        return $this->hasMany(Address::class, 'cus_id');
    }
}
