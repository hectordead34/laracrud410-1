<?php

namespace App\Http\Requests\Sales;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true; // Cambia según la lógica de autorización si es necesario
    }

    /**
     * Reglas de validación para la actualización de una venta.
     */
    public function rules(): array
    {
        return [
            'client_id' => 'required|exists:clients,id', // Verifica que el cliente exista
            'product_id' => 'required|exists:products,id', // Verifica que el producto exista
            'sale_date' => 'required|date', // Fecha válida
        ];
    }

    /**
     * Mensajes de error personalizados (opcional).
     */
    public function messages(): array
    {
        return [
            'client_id.required' => 'El cliente es obligatorio.',
            'client_id.exists' => 'El cliente seleccionado no existe.',
            'product_id.required' => 'El producto es obligatorio.',
            'product_id.exists' => 'El producto seleccionado no existe.',
            'sale_date.required' => 'La fecha de la venta es obligatoria.',
            'sale_date.date' => 'La fecha debe ser válida.',
        ];
    }
}
