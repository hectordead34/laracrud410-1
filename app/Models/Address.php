<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // Campos permitidos para la asignación masiva
    protected $fillable = [
        'street',
        'internal_num',
        'external_num',
        'neightbornhood',
        'town',
        'state',
        'country',
        'postal_code',
        'references',
        'client_id',
    ];

    /**
     * Relación con el modelo Client.
     * Una dirección pertenece a un cliente.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
