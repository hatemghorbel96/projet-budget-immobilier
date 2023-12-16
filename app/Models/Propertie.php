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
}
