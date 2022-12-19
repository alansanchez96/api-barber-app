<?php

namespace App\Http\Resources\Service;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'type' => 'service',
            'id' => $this->resource->getRouteKey(),
            'attributes' => [
                'description' => $this->description,
                'price' => $this->price,
                'image' => 'storage/' . $this->image->url,
                'status' => $this->status,
            ],
            'links' => [
                'self' => route('api.getService', $this->resource)
            ]
        ];
    }
}
