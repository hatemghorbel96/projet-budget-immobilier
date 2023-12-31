<?php

namespace App\Models;

use App\Models\ImagePropertie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propertie extends Model
{
    protected $table = 'properties';
    use HasFactory;

    protected $guarded =[];

    public function images()
    {
        return $this->hasMany(ImagePropertie::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }

    public function bientype()
    {
        return $this->belongsTo(Bientype::class);
    }
}
