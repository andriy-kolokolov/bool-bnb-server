<?php

namespace Database\Seeders;

use App\Models\View;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 2000; $i++) {
            View::create([
                'apartment_id' => $faker->numberBetween(1, 30), // Assuming you have 30 apartments
                'ip'           => $faker->ipv4,
                'date'         => $faker->dateTimeThisYear('now', 'Europe/Rome')->format('Y-m-d H:i:s'),
            ]);
        }
    }
};
