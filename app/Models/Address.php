<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'internal_num',
        'external_num',
        'neighborhood',
        'town',
        'state',
        'country',
        'postal_code',
        'references'
    ];
}
