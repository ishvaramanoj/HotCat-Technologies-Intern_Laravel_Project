<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function locations()
    {
        return $this->hasMany(Location::class, 'cus_id');
    }
}
