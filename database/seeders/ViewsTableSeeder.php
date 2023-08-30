<?php

namespace Database\Seeders;

use App\Models\View;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $views = [
            [
                'apartment_id' => 1,
                'ip'           => '192.168.1.1',
                'date'         => '2023-08-25 08:30:00',
            ],
            [
                'apartment_id' => 2,
                'ip'           => '192.168.1.2',
                'date'         => '2023-08-24 14:45:00',
            ],
            [
                'apartment_id' => 3,
                'ip'           => '192.168.1.3',
                'date'         => '2023-08-23 09:15:00',
            ],
            [
                'apartment_id' => 4,
                'ip'           => '192.168.1.4',
                'date'         => '2023-08-22 16:20:00',
            ],
            [
                'apartment_id' => 5,
                'ip'           => '192.168.1.5',
                'date'         => '2023-08-21 10:05:00',
            ],
            [
                'apartment_id' => 6,
                'ip'           => '192.168.1.6',
                'date'         => '2023-08-20 12:30:00',
            ],
            [
                'apartment_id' => 7,
                'ip'           => '192.168.1.7',
                'date'         => '2023-08-19 11:55:00',
            ],
            [
                'apartment_id' => 8,
                'ip'           => '192.168.1.8',
                'date'         => '2023-08-18 19:40:00',
            ],
            [
                'apartment_id' => 9,
                'ip'           => '192.168.1.9',
                'date'         => '2023-08-17 15:25:00',
            ],
            [
                'apartment_id' => 10,
                'ip'           => '192.168.1.10',
                'date'         => '2023-08-16 07:50:00',
            ],
            [
                'apartment_id' => 11,
                'ip'           => '192.168.1.11',
                'date'         => '2023-08-15 23:10:00',
            ],
            [
                'apartment_id' => 12,
                'ip'           => '192.168.1.12',
                'date'         => '2023-08-14 18:15:00',
            ],
            [
                'apartment_id' => 13,
                'ip'           => '192.168.1.13',
                'date'         => '2023-08-13 13:45:00',
            ],
            [
                'apartment_id' => 14,
                'ip'           => '192.168.1.14',
                'date'         => '2023-08-12 09:55:00',
            ],
            [
                'apartment_id' => 15,
                'ip'           => '192.168.1.15',
                'date'         => '2023-08-11 04:20:00',
            ],
            [
                'apartment_id' => 16,
                'ip'           => '192.168.1.16',
                'date'         => '2023-08-10 22:30:00',
            ],
            [
                'apartment_id' => 17,
                'ip'           => '192.168.1.17',
                'date'         => '2023-08-09 17:15:00',
            ],
            [
                'apartment_id' => 18,
                'ip'           => '192.168.1.18',
                'date'         => '2023-08-08 20:05:00',
            ],
            [
                'apartment_id' => 19,
                'ip'           => '192.168.1.19',
                'date'         => '2023-08-07 14:50:00',
            ],
            [
                'apartment_id' => 20,
                'ip'           => '192.168.1.20',
                'date'         => '2023-08-06 06:40:00',
            ],
            [
                'apartment_id' => 21,
                'ip'           => '192.168.1.21',
                'date'         => '2023-08-05 10:55:00',
            ],
            [
                'apartment_id' => 22,
                'ip'           => '192.168.1.22',
                'date'         => '2023-08-04 03:20:00',
            ],
            [
                'apartment_id' => 23,
                'ip'           => '192.168.1.23',
                'date'         => '2023-08-03 08:40:00',
            ],
            [
                'apartment_id' => 24,
                'ip'           => '192.168.1.24',
                'date'         => '2023-08-02 12:15:00',
            ],
            [
                'apartment_id' => 25,
                'ip'           => '192.168.1.25',
                'date'         => '2023-08-01 14:25:00',
            ],
            [
                'apartment_id' => 26,
                'ip'           => '192.168.1.26',
                'date'         => '2023-07-31 16:35:00',
            ],
            [
                'apartment_id' => 27,
                'ip'           => '192.168.1.27',
                'date'         => '2023-07-30 19:10:00',
            ],
            [
                'apartment_id' => 28,
                'ip'           => '192.168.1.28',
                'date'         => '2023-07-29 23:45:00',
            ],
            [
                'apartment_id' => 29,
                'ip'           => '192.168.1.29',
                'date'         => '2023-07-28 05:55:00',
            ],
            [
                'apartment_id' => 30,
                'ip'           => '192.168.1.30',
                'date'         => '2023-07-27 08:20:00',
            ],
        ];

        foreach ($views as $view) {
            View::create($view);
        }
    }
};
