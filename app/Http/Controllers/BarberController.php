<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Http\Controllers\Controller;
use App\Http\Resources\Barber\BarberResource;
use App\Http\Resources\Barber\BarberCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class BarberController extends Controller
{
    /**
     * Envia una respuesta con todos los datos de Barbers registrados en formato JSON.
     *
     * @return BarberCollection|JsonResource
     */
    public function getAllBarbers(): BarberCollection|JsonResource
    {
        return BarberCollection::make(Barber::all());
    }

    /**
     * Envia una respuesta con el barber obtenido por ID atraves de un JSON.
     *
     * @param integer $id
     * @return BarberResource|JsonResource|BarberCollection
     */
    public function getBarber(int $id): BarberResource|JsonResource|BarberCollection
    {
        return BarberResource::make(Barber::findOrFail($id));
    }
}
