<?php

namespace App\Http\Controllers;

use App\Models\Cite;
use App\Http\Controllers\Controller;
use App\Http\Resources\Cite\CiteResource;
use App\Http\Resources\Cite\CiteCollection;
use Illuminate\Http\Resources\Json\JsonResource;


class CiteController extends Controller
{
    public function getAllCites(): CiteCollection|JsonResource
    {
        return CiteCollection::make(Cite::all());
    }

    public function getCite(int $id): CiteResource|JsonResource|CiteCollection
    {
        return CiteResource::make(Cite::findOrFail($id));
    }
}
