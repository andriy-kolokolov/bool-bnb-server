<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sponsorships = [
            [
                'level'    => 'Basic', 
                'price'    => '50', 
                'duration' => '7 days'
            ],
            [
                'level'    => 'Premium', 
                'price'    => '100', 
                'duration' => '14 days'
            ],
            [
                'level'    => 'Deluxe', 
                'price'    => '150', 
                'duration' => '30 days'
            ],
        ];

        foreach ($sponsorships as $sponsorship) {
            Sponsorship::create($sponsorship);
        }
    }
};
