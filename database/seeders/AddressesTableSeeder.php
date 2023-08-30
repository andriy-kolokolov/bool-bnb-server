<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $addresses = [
            [
                'apartment_id'  => 1,
                'street'        => 'Via Veneto 45',
                'zip'           => '00187',
                'city'          => 'Roma',
                'latitude'      => 41.9062,
                'longitude'     => 12.4891
            ],
            [
                'apartment_id'  => 2,
                'street'        => 'Corso Sempione 67',
                'zip'           => '20149',
                'city'          => 'Milano',
                'latitude'      => 45.4789,
                'longitude'     => 9.1775
            ],
            [
                'apartment_id'  => 3,
                'street'        => 'Via dell\'Indipendenza 23',
                'zip'           => '40121',
                'city'          => 'Bologna',
                'latitude'      => 44.4949,
                'longitude'     => 11.3426
            ],
            [
                'apartment_id'  => 4,
                'street'        => 'Via Balbi 45',
                'zip'           => '16126',
                'city'          => 'Genova',
                'latitude'      => 44.4079,
                'longitude'     => 8.9313
            ],
            [
                'apartment_id'  => 5,
                'street'        => 'Via Roma 33',
                'zip'           => '10121',
                'city'          => 'Torino',
                'latitude'      => 45.0658,
                'longitude'     => 7.6857
            ],
            [
                'apartment_id'  => 6,
                'street'        => 'Via del Corso 44',
                'zip'           => '00186',
                'city'          => 'Roma',
                'latitude'      => 41.9007,
                'longitude'     => 12.4808
            ],
            [
                'apartment_id'  => 7,
                'street'        => 'Via Tornabuoni 2',
                'zip'           => '50123',
                'city'          => 'Firenze',
                'latitude'      => 43.7713,
                'longitude'     => 11.2512
            ],
            [
                'apartment_id'  => 8,
                'street'        => 'Via Diaz 4',
                'zip'           => '80134',
                'city'          => 'Napoli',
                'latitude'      => 40.8400,
                'longitude'     => 14.2528
            ],
            [
                'apartment_id'  => 9,
                'street'        => 'Via Santa Maria 10',
                'zip'           => '56126',
                'city'          => 'Pisa',
                'latitude'      => 43.7169,
                'longitude'     => 10.3953
            ],
            [
                'apartment_id'  => 10,
                'street'        => 'Via del Trivio 7',
                'zip'           => '60121',
                'city'          => 'Ancona',
                'latitude'      => 43.6175,
                'longitude'     => 13.5189
            ],
            [
                'apartment_id'  => 11,
                'street'        => 'Via Mazzini 6',
                'zip'           => '37121',
                'city'          => 'Verona',
                'latitude'      => 45.4384,
                'longitude'     => 10.9916
            ],
            [
                'apartment_id'  => 12,
                'street'        => 'Via Etnea 23',
                'zip'           => '95131',
                'city'          => 'Catania',
                'latitude'      => 37.5079,
                'longitude'     => 15.0830
            ],
            [
                'apartment_id'  => 13,
                'street'        => 'Via Gombito 7',
                'zip'           => '24121',
                'city'          => 'Bergamo',
                'latitude'      => 45.6944,
                'longitude'     => 9.6685
            ],
            [
                'apartment_id'  => 14,
                'street'        => 'Corso Vannucci 12',
                'zip'           => '06121',
                'city'          => 'Perugia',
                'latitude'      => 43.1125,
                'longitude'     => 12.3887
            ],
            [
                'apartment_id'  => 15,
                'street'        => 'Via Argentieri 11',
                'zip'           => '39100',
                'city'          => 'Bolzano',
                'latitude'      => 46.4981,
                'longitude'     => 11.3548
            ],
            [
                'apartment_id'  => 16,
                'street'        => 'Via San Gregorio 5',
                'zip'           => '95127',
                'city'          => 'Catania',
                'latitude'      => 37.5115,
                'longitude'     => 15.0689
            ],
            [
                'apartment_id'  => 17,
                'street'        => 'Via del Teatro 3',
                'zip'           => '34121',
                'city'          => 'Trieste',
                'latitude'      => 45.6495,
                'longitude'     => 13.7768
            ],
            [
                'apartment_id'  => 18,
                'street'        => 'Via Cesare Battisti 4',
                'zip'           => '48121',
                'city'          => 'Ravenna',
                'latitude'      => 44.4157,
                'longitude'     => 12.2008
            ],
            [
                'apartment_id'  => 19,
                'street'        => 'Via Manno 4',
                'zip'           => '09124',
                'city'          => 'Cagliari',
                'latitude'      => 39.2205,
                'longitude'     => 9.1217
            ],
            [
                'apartment_id'  => 20,
                'street'        => 'Via Altabella 1',
                'zip'           => '40126',
                'city'          => 'Bologna',
                'latitude'      => 44.4929,
                'longitude'     => 11.3431
            ],
            [
                'apartment_id'  => 21,
                'street'        => 'Via Lido 12',
                'zip'           => '30016',
                'city'          => 'Jesolo',
                'latitude'      => 45.4991,
                'longitude'     => 12.6421
            ],
            [
                'apartment_id'  => 22,
                'street'        => 'Via Verdi 5',
                'zip'           => '55049',
                'city'          => 'Viareggio',
                'latitude'      => 43.8745,
                'longitude'     => 10.2560
            ],
            [
                'apartment_id'  => 23,
                'street'        => 'Via Roma 10',
                'zip'           => '25049',
                'city'          => 'Iseo',
                'latitude'      => 45.6556,
                'longitude'     => 10.0521
            ],
            [
                'apartment_id'  => 24,
                'street'        => 'Via Riviera 7',
                'zip'           => '22011',
                'city'          => 'Griante',
                'latitude'      => 45.9871,
                'longitude'     => 9.2618
            ],
            [
                'apartment_id'  => 25,
                'street'        => 'Via Mare 22',
                'zip'           => '84017',
                'city'          => 'Positano',
                'latitude'      => 40.6281,
                'longitude'     => 14.4850
            ],
            [
                'apartment_id'  => 26,
                'street'        => 'Via Pascoli 9',
                'zip'           => '28838',
                'city'          => 'Stresa',
                'latitude'      => 45.8878,
                'longitude'     => 8.5250
            ],
            [
                'apartment_id'  => 27,
                'street'        => 'Via Duomo 16',
                'zip'           => '70044',
                'city'          => 'Polignano a Mare',
                'latitude'      => 40.9965,
                'longitude' => 17.2169
            ],
            [
                'apartment_id'  => 28,
                'street'        => 'Via Centro 5',
                'zip'           => '25080',
                'city'          => 'Manerba del Garda',
                'latitude'      => 45.5619,
                'longitude'     => 10.5594
            ],
            [
                'apartment_id'  => 29,
                'street'        => 'Via Roma 23',
                'zip'           => '19016',
                'city'          => 'Monterosso al Mare',
                'latitude'      => 44.1459,
                'longitude'     => 9.6544
            ],
            [
                'apartment_id'  => 30,
                'street'        => 'Via Nizza 8',
                'zip'           => '18013',
                'city'          => 'Diano Marina',
                'latitude'      => 43.9220,
                'longitude'     => 8.0817
            ],
        ];


        foreach ($addresses as $address) {
            Address::create($address);
        }
    }
};
