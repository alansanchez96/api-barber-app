<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Service\ServiceResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Service\ServiceCollection;

class ServiceController extends Controller
{
    /**
     * Envia una respuesta con todos los datos de Services registrados en formato JSON.
     *
     * @return ServiceCollection|JsonResource
     */
    public function getAllServices(): ServiceCollection|JsonResource
    {
        return ServiceCollection::make(Service::all());
    }

    /**
     * Envia una respuesta con el service obtenido por ID atraves de un JSON.
     *
     * @param integer $id
     * @return ServiceResource|JsonResource|ServiceCollection
     */
    public function getService(int $id): ServiceResource|JsonResource|ServiceCollection
    {
        return ServiceResource::make(Service::findOrFail($id));
    }
}
