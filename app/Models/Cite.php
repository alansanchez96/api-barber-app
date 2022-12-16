<?php

namespace App\Models;

use App\Models\Barber;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cite extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
