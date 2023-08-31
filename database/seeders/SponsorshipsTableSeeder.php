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
                'price'    => '2,99 €',
                'duration' => '24 hours'
            ],
            [
                'level'    => 'Premium',
                'price'    => '5,99 €',
                'duration' => '72 hours'
            ],
            [
                'level'    => 'Deluxe',
                'price'    => '9,99 €',
                'duration' => '144 hours'
            ],
        ];

        foreach ($sponsorships as $sponsorship) {
            Sponsorship::create($sponsorship);
        }
    }
};
