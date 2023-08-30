<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Apartment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $apartmentsData = [
            [
                'name'          => 'Cozy Studio Apartment',
                'rooms'         => 1,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 35,
                'is_available'  => true,
                'is_sponsored'  => true,
                'user_id'       => 1,
            ],
            [
                'name'          => 'Spacious 2-Bedroom Apartment',
                'rooms'         => 3,
                'beds'          => 2,
                'bathrooms'     => 2,
                'square_meters' => 85,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 1,
            ],
            [
                'name'          => 'Luxury Penthouse Suite',
                'rooms'         => 4,
                'beds'          => 3,
                'bathrooms'     => 3,
                'square_meters' => 180,
                'is_available'  => true,
                'is_sponsored'  => true,
                'user_id'       => 1,
            ],
            [
                'name'          => 'Charming Garden Apartment',
                'rooms'         => 2,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 55,
                'is_available'  => false,
                'is_sponsored'  => false,
                'user_id'       => 5,
            ],
            [
                'name'          => 'Seaside Beach House',
                'rooms'         => 5,
                'beds'          => 4,
                'bathrooms'     => 3,
                'square_meters' => 200,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 5,
            ],
            [
                'name'          => 'Mountain View Cabin',
                'rooms'         => 3,
                'beds'          => 2,
                'bathrooms'     => 2,
                'square_meters' => 120,
                'is_available'  => true,
                'is_sponsored'  => true,
                'user_id'       => 5,
            ],
            [
                'name'          => 'Downtown Loft Apartment',
                'rooms'         => 1,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 40,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 7,
            ],
            [
                'name'          => 'Rural Farmhouse Retreat',
                'rooms'         => 4,
                'beds'          => 3,
                'bathrooms'     => 2,
                'square_meters' => 150,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 7,
            ],
            [
                'name'          => 'Sunny Beachfront Condo',
                'rooms'         => 2,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 60,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 7,
            ],
            [
                'name'          => 'Historic City Center Apartment',
                'rooms'         => 2,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 65,
                'is_available'  => false,
                'is_sponsored'  => false,
                'user_id'       => 4,
            ],
            [
                'name'          => 'Riverside Cabin Retreat',
                'rooms'         => 3,
                'beds'          => 2,
                'bathrooms'     => 1,
                'square_meters' => 80,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 4,
            ],
            [
                'name'          => 'Urban Studio Loft',
                'rooms'         => 1,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 45,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 4,
            ],
            [
                'name'          => 'Secluded Lakeside Cottage',
                'rooms'         => 2,
                'beds'          => 1,
                'bathrooms'     => 1,
                'square_meters' => 70,
                'is_available'  => false,
                'is_sponsored'  => false,
                'user_id'       => 19,
            ],
            [
                'name'          => 'Mountain Retreat Chalet',
                'rooms'         => 3,
                'beds'          => 2,
                'bathrooms'     => 2,
                'square_meters' => 100,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 19,
            ],
            [
                'name'          => 'Downtown Luxury Penthouse',
                'rooms'         => 4,
                'beds'          => 3,
                'bathrooms'     => 3,
                'square_meters' => 180,
                'is_available'  => true,
                'is_sponsored'  => false,
                'user_id'       => 19,
            ],
            [
                'name'          => 'City View Apartment',
                'rooms'         => 2,
                'beds'          => 2,
                'bathrooms'     => 2,
                'square_meters' => 75,
                'is_available'  => false,
                'is_sponsored'  => false,
                'user_id'       => 15,
            ],
            [
                'name'          => 'Countryside Villa',
                'rooms'         => 5,
                'beds'          => 4,
                'bathrooms'     => 3,
                'square_meters' => 220,
                'is_available'  => true,
                'is_sponsored'  => true,
                'user_id'       => 15,
            ],
            [
                'name'          => 'Oceanfront Paradise',
                'rooms'         => 3,
                'beds'          => 2,
                'bathrooms'     => 2,
                'square_meters' => 120,
                'is_available'  => true,
                'is_sponsored'  => true,
                'user_id'       => 15,
            ],
            [
                'name' => 'Downtown Loft',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 60,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 8,
            ],
            [
                'name' => 'Riverside Cabin',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 70,
                'is_available' => false,
                'is_sponsored' => false,
                'user_id' => 8,
            ],
            [
                'name' => 'Mountain View Chalet',
                'rooms' => 3,
                'beds' => 2,
                'bathrooms' => 2,
                'square_meters' => 100,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 8,
            ],
            [
                'name' => 'Beachfront Bungalow',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 65,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 8,
            ],
            [
                'name' => 'Mountain Retreat Cabin',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 75,
                'is_available' => false,
                'is_sponsored' => false,
                'user_id' => 11,
            ],
            [
                'name' => 'Lakeside Cottage',
                'rooms' => 3,
                'beds' => 2,
                'bathrooms' => 2,
                'square_meters' => 100,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 11,
            ],
            [
                'name' => 'Luxury Villa with Pool',
                'rooms' => 6,
                'beds' => 4,
                'bathrooms' => 5,
                'square_meters' => 350,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 1,
            ],
            [
                'name' => 'Downtown Studio Apartment',
                'rooms' => 1,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 40,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 11,
            ],
            [
                'name' => 'Forest Retreat Cabin',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 60,
                'is_available' => false,
                'is_sponsored' => true,
                'user_id' => 11,
            ],
            [
                'name' => 'Seaside Apartment with a View',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 65,
                'is_available' => false,
                'is_sponsored' => false,
                'user_id' => 16,
            ],
            [
                'name' => 'Rustic Mountain Cabin',
                'rooms' => 3,
                'beds' => 2,
                'bathrooms' => 2,
                'square_meters' => 80,
                'is_available' => true,
                'is_sponsored' => false,
                'user_id' => 16,
            ],
            [
                'name' => 'Beachfront Paradise Villa',
                'rooms' => 4,
                'beds' => 3,
                'bathrooms' => 3,
                'square_meters' => 220,
                'is_available' => true,
                'is_sponsored' => true,
                'user_id' => 16,
            ],
        ];

        foreach ($apartmentsData as $apartmentData) {
            
            $apartment = Apartment::create([
                'name'          => $apartmentData['name'],
                'rooms'         => $apartmentData['rooms'],
                'beds'          => $apartmentData['beds'],
                'bathrooms'     => $apartmentData['bathrooms'],
                'square_meters' => $apartmentData['square_meters'],
                'is_available'  => $apartmentData['is_available'],
                'is_sponsored'  => $apartmentData['is_sponsored'],
                'user_id'       => $apartmentData['user_id'],
            ]);
        }

        // foreach (Apartment::all() as $apartmentData) {
        //     $apartmentData->services()->attach(
        //         Service::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray()
        //     );

        //     $apartmentData->services()->sync($apartmentData['services']);
        // }

        // $apartment->sponsorships()->sync($apartmentData['sponsorships']);

        foreach ($apartmentsData as $apartmentData) {
            $apartmentData = Apartment::create($apartmentData);
        }

        foreach (Apartment::all() as $apartmentFromDb) {
            $randomServices = Service::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray();
            $apartmentFromDb->services()->attach($randomServices);
        }
    }
};




