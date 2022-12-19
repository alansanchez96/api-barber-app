<?php

namespace App\Http\Resources\Cite;

use App\Http\Resources\Barber\BarberResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CiteResource extends JsonResource
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
            'type' => 'cite',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->name,
                'surname' => $this->surname,
                'phone_number' => $this->phone_number,
                'date' => $this->date,
                'time' => $this->time,
                'barber_id' => BarberResource::make($this->barber),
            ],
            'links' => [
                'self' => route('api.getCite', $this->resource)
            ]
        ];
    }
}
