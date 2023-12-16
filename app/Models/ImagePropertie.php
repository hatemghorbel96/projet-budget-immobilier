<?php

namespace App\Models;

use App\Models\Propertie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagePropertie extends Model
{
    protected $table = 'image_properties';
    use HasFactory;

    protected $guarded =[];

    public function properties()
    {
        return $this->belongsTo(Propertie::class, 'propertie_id');
    }
}
