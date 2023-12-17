<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BientypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bientypes = [
            'Appartements à vendre', 'Bureaux à vendre', 'Chalets à vendre', 'Châteaux à vendre',
            'Construction', 'Maisons constructibles', 'Maisons à vendre', 'Immeubles à vendre',
            'Hôtels particuliers à vendre', 'Terrains à vendre', 'Studios à vendre', 'Villas à vendre'
        ];

        foreach ($bientypes as $bientype) {
            DB::table('bientypes')->insert([
                'name' => $bientype,
            ]);
        }
    }
}
