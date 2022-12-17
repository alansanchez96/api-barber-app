<?php

namespace App\Http\Resources\Barber;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BarberCollection extends ResourceCollection
{
    /* protected $collects = BarberResource::class; */

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => route('api.getAllBarbers')
            ],
            'meta' => [
                'barbers_count' => $this->collection->count()
            ]
        ];
    }
}
