<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_infos')->truncate();
        DB::table('car_infos')->insert([
            [
                "car_name" => "VELLFIRE",
                "mode_urban" => 7.8,
                "mode_suburbs" => 11.3,
                "mode_highway" => 12,
                "mode_wltc" => 9.9,
                "price" => 4541000,
                "model_year" => 2019,
                "mileage" => 41000,
                "comment" => "30系後期\n2.5Z Gエディション\n黒",
                'created_at' => now(),
                'updated_at' => now()
            ], [
                "car_name" => "VELLFIRE",
                "mode_urban" => 7.8,
                "mode_suburbs" => 11.3,
                "mode_highway" => 12,
                "mode_wltc" => 9.9,
                "price" => 3182000,
                "model_year" => 2018,
                "mileage" => 37000,
                "comment" => "30系後期\n2.5Z\n白",
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
