<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $fillable = [
        'cus_id',
        'address',
    ];
    use HasFactory;

    public function customer():BelongsTo

    {
        return $this->belongsTo(Customer::class);
    }
}
