<?php

namespace App\Http\Resources\Barber;

use Illuminate\Http\Resources\Json\JsonResource;

class BarberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'type' => 'barber',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->name,
                'surname' => $this->surname,
                'status' => $this->status,
            ],
            'links' => [
                'self' => route('api.getBarber', $this->resource)
            ]
        ];
    }
}
