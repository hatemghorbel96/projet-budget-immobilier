<?php

namespace App\Models;

use App\Models\Propertie;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function properties()
    {
        return $this->hasMany(Propertie::class);
    }

    public function getPropertyCountForSale()
    {
        return $this->properties()->where('for', 'sale')->count();
    }

    public function getPropertyCountForRent()
    {
        return $this->properties()->where('for', 'rent')->count();
    }
}
