<?php

namespace App\Models;

use App\Models\Cite;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function cite()
    {
        return $this->hasOne(Cite::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
