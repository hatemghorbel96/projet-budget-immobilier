<?php

namespace App\Models;

use App\Models\Propertie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bientype extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function properties()
    {
        return $this->hasMany(Propertie::class);
    }
}
