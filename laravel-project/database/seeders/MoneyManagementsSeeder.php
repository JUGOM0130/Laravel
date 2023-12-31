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
        DB::table('money_managements')->insert(
            [
                [
                    'year' => 2023,
                    'month' => 7,
                    'category' => 3,
                    'kingaku' => 8580,
                    'comment' => "上：4790\n下：3790",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 6,
                    'category' => 2,
                    'kingaku' => 4777,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 3,
                    'category' => 3,
                    'kingaku' => 9320,
                    'comment' => "上：5140\n下：4180",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 9,
                    'category' => 3,
                    'kingaku' => 7440,
                    'comment' => "4250\n下：3190",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 5,
                    'category' => 3,
                    'kingaku' => 7850,
                    'comment' => "4440\n下：3410",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 7,
                    'category' => 3,
                    'kingaku' => 8580,
                    'comment' => "4790\n下：3790",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 3,
                    'category' => 3,
                    'kingaku' => 8210,
                    'comment' => "上：4610\n下：3600",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 11,
                    'category' => 3,
                    'kingaku' => 7440,
                    'comment' => "上：4250\n下：3190",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 5,
                    'category' => 3,
                    'kingaku' => 8580,
                    'comment' => "上：4790\n下：3790",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 1,
                    'category' => 3,
                    'kingaku' => 7640,
                    'comment' => "上：4340\n下：3300",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 7,
                    'category' => 3,
                    'kingaku' => 8580,
                    'comment' => "上：4790\n下：3790",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 3,
                    'category' => 2,
                    'kingaku' => 6192,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 2,
                    'category' => 2,
                    'kingaku' => 8076,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 7,
                    'category' => 2,
                    'kingaku' => 3249,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 6,
                    'category' => 2,
                    'kingaku' => 4219,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 5,
                    'category' => 2,
                    'kingaku' => 4732,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 4,
                    'category' => 2,
                    'kingaku' => 5958,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'year' => 2022,
                    'month' => 11,
                    'category' => 2,
                    'kingaku' => 4182,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 8,
                    'category' => 2,
                    'kingaku' => 2564,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2022,
                    'month' => 9,
                    'category' => 2,
                    'kingaku' => 2236,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 6,
                    'category' => 2,
                    'kingaku' => 4777,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 5,
                    'category' => 2,
                    'kingaku' => 4955,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 4,
                    'category' => 2,
                    'kingaku' => 5557,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 3,
                    'category' => 2,
                    'kingaku' => 5760,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 2,
                    'category' => 2,
                    'kingaku' => 5802,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'year' => 2023,
                    'month' => 1,
                    'category' => 2,
                    'kingaku' => 7679,
                    'comment' => "",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
