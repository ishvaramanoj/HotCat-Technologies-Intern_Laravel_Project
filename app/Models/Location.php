<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    // protected $table = 'locations';
    // protected $primaryKey = 'id';

     protected $fillable = [
          'cus_id',
          'address',
      ];
    use HasFactory;

    public function customer()

    {
        return $this->belongsTo(Customer::class);
    }
}
