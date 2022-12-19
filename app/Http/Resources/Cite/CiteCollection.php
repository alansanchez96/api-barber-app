<?php

namespace App\Http\Resources\Cite;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CiteCollection extends ResourceCollection
{
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
                'self' => route('api.getAllCites')
            ],
            'meta' => [
                'cites_count' => $this->collection->count()
            ]
        ];
    }
}
