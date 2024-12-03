<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'email',
        'phone',
        'address_id',
        'state',
        'town'
    ];

    public function address():BelongsTo{
        return $this->belongsTo(Address::class, 'address_id');
    }
}
