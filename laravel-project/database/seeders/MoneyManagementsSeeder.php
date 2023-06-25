<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoneyManagementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('money_managements')->truncate();
        /*
        DB::table('money_managements')->insert(
            [
                [
                    'month' => 1,
                    'category' => 2,
                    'kingaku' => 222,
                    'comment' => "でんきだい",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'month' => 2,
                    'category' => 1,
                    'kingaku' => 300,
                    'comment' => "ガス代",
                    'created_at' => now(),
                    'updated_at' => now(),
                ], [
                    'month' => 3,
                    'category' => 2,
                    'kingaku' => 500,
                    'comment' => "水道代",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );*/
    }
}
