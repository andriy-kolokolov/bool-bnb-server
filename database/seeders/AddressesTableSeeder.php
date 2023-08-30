<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $addresses = [
            [
                'apartment_id' => 1,
                'street'       => '123 Main Street',
                'zip'          => '12345',
                'city'         => 'New York',
                'latitude'     => 40.7128,
                'longitude'    => -74.0060,
            ],
            [
                'apartment_id' => 2,
                'street'       => '456 Elm Avenue',
                'zip'          => '67890',
                'city'         => 'Los Angeles',
                'latitude'     => 34.0522,
                'longitude'    => -118.2437,
            ],
            [
                'apartment_id' => 3,
                'street'       => '789 Oak Drive',
                'zip'          => '54321',
                'city'         => 'Chicago',
                'latitude'     => 41.8781,
                'longitude'    => -87.6298,
            ],
            [
                'apartment_id' => 4,
                'street'       => '101 Pine Lane',
                'zip'          => '13579',
                'city'         => 'Houston',
                'latitude'     => 29.7604,
                'longitude'    => -95.3698,
            ],
            [
                'apartment_id' => 5,
                'street'       => '202 Cedar Road',
                'zip'          => '98765',
                'city'         => 'Miami',
                'latitude'     => 25.7617,
                'longitude'    => -80.1918,
            ],
            [
                'apartment_id' => 6,
                'street'       => '303 Birch Street',
                'zip'          => '24680',
                'city'         => 'San Francisco',
                'latitude'     => 37.7749,
                'longitude'    => -122.4194,
            ],
            [
                'apartment_id' => 7,
                'street'       => '404 Maple Avenue',
                'zip'          => '86420',
                'city'         => 'Seattle',
                'latitude'     => 47.6062,
                'longitude'    => -122.3321,
            ],
            [
                'apartment_id' => 8,
                'street'       => '505 Redwood Road',
                'zip'          => '97531',
                'city'         => 'Boston',
                'latitude'     => 42.3601,
                'longitude'    => -71.0589,
            ],
            [
                'apartment_id' => 9,
                'street'       => '606 Willow Lane',
                'zip'          => '75309',
                'city'         => 'Austin',
                'latitude'     => 30.2672,
                'longitude'    => -97.7431,
            ],
            [
                'apartment_id' => 10,
                'street'       => '707 Sycamore Drive',
                'zip'          => '36981',
                'city'         => 'Denver',
                'latitude'     => 39.7392,
                'longitude'    => -104.9903,
            ],
            [
                'apartment_id' => 11,
                'street'       => '808 Oakwood Lane',
                'zip'          => '13579',
                'city'         => 'Dallas',
                'latitude'     => 32.7767,
                'longitude'    => -96.7970,
            ],
            [
                'apartment_id' => 12,
                'street'       => '909 Pinecrest Road',
                'zip'          => '86420',
                'city'         => 'Phoenix',
                'latitude'     => 33.4484,
                'longitude'    => -112.0740,
            ],
            [
                'apartment_id' => 13,
                'street'       => '1010 Elmwood Avenue',
                'zip'          => '75309',
                'city'         => 'Philadelphia',
                'latitude'     => 39.9526,
                'longitude'    => -75.1652,
            ],
            [
                'apartment_id' => 14,
                'street'       => '1111 Cedar Lane',
                'zip'          => '97531',
                'city'         => 'San Diego',
                'latitude'     => 32.7157,
                'longitude'    => -117.1611,
            ],
            [
                'apartment_id' => 15,
                'street'       => '1212 Willow Drive',
                'zip'          => '24680',
                'city'         => 'San Antonio',
                'latitude'     => 29.4241,
                'longitude'    => -98.4936,
            ],
            [
                'apartment_id' => 16,
                'street'       => '1313 Maple Road',
                'zip'          => '98765',
                'city'         => 'San Jose',
                'latitude'     => 37.3541,
                'longitude'    => -121.9552,
            ],
            [
                'apartment_id' => 17,
                'street'       => '1414 Sycamore Lane',
                'zip'          => '13579',
                'city'         => 'Austin',
                'latitude'     => 30.2672,
                'longitude'    => -97.7431,
            ],
            [
                'apartment_id' => 18,
                'street'       => '1515 Oakwood Road',
                'zip'          => '86420',
                'city'         => 'Chicago',
                'latitude'     => 41.8781,
                'longitude'    => -87.6298,
            ],
            [
                'apartment_id' => 19,
                'street'       => '1616 Pinecrest Drive',
                'zip'          => '97531',
                'city'         => 'Denver',
                'latitude'     => 39.7392,
                'longitude'    => -104.9903,
            ],
            [
                'apartment_id' => 20,
                'street'       => '1717 Elm Street',
                'zip'          => '24680',
                'city'         => 'Seattle',
                'latitude'     => 47.6062,
                'longitude'    => -122.3321,
            ],
            [
                'apartment_id' => 21,
                'street'       => '1818 Cedar Avenue',
                'zip'          => '75309',
                'city'         => 'Phoenix',
                'latitude'     => 33.4484,
                'longitude'    => -112.0740,
            ],
            [
                'apartment_id' => 22,
                'street'       => '1919 Willow Drive',
                'zip'          => '86420',
                'city'         => 'San Francisco',
                'latitude'     => 37.7749,
                'longitude'    => -122.4194,
            ],
            [
                'apartment_id' => 23,
                'street'       => '2020 Oak Lane',
                'zip'          => '97531',
                'city'         => 'Boston',
                'latitude'     => 42.3601,
                'longitude'    => -71.0589,
            ],
            [
                'apartment_id' => 24,
                'street'       => '2121 Pine Road',
                'zip'          => '24680',
                'city'         => 'Philadelphia',
                'latitude'     => 39.9526,
                'longitude'    => -75.1652,
            ],
            [
                'apartment_id' => 25,
                'street'       => '2222 Elmwood Drive',
                'zip'          => '13579',
                'city'         => 'Los Angeles',
                'latitude'     => 34.0522,
                'longitude'    => -118.2437,
            ],
            [
                'apartment_id' => 26,
                'street'       => '2323 Willow Lane',
                'zip'          => '98765',
                'city'         => 'Miami',
                'latitude'     => 25.7617,
                'longitude'    => -80.1918,
            ],
            [
                'apartment_id' => 27,
                'street'       => '2424 Cedar Road',
                'zip'          => '75309',
                'city'         => 'San Diego',
                'latitude'     => 32.7157,
                'longitude'    => -117.1611,
            ],
            [
                'apartment_id' => 28,
                'street'       => '2525 Oakwood Avenue',
                'zip'          => '86420',
                'city'         => 'San Antonio',
                'latitude'     => 29.4241,
                'longitude'    => -98.4936,
            ],
            [
                'apartment_id' => 29,
                'street'       => '2626 Pine Lane',
                'zip'          => '97531',
                'city'         => 'San Jose',
                'latitude'     => 37.3541,
                'longitude'    => -121.9552,
            ],
            [
                'apartment_id' => 30,
                'street'       => '2727 Birch Street',
                'zip'          => '24680',
                'city'         => 'Austin',
                'latitude'     => 30.2672,
                'longitude'    => -97.7431,
            ]
        ];

        foreach ($addresses as $address) {
            Address::create($address);
        }
    }
};
