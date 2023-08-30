<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
   
    public function run()
    {
        $users = [
            [
                'username'    => 'Admin',
                'lastname'    => 'Admin',
                'email'       => 'Admin@gmail.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Maria',
                'lastname'   => 'Rossi',
                'email'      => 'maria.rossi@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Luca',
                'lastname'   => 'Bianchi',
                'email'      => 'luca.bianchi@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Stefania',
                'lastname'   => 'Neri',
                'email'      => 'stefania.neri@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Roberto',
                'lastname'   => 'Esposito',
                'email'      => 'roberto.esposito@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Giulia',
                'lastname'   => 'Ferrari',
                'email'      => 'giulia.ferrari@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Francesco',
                'lastname'   => 'Conti',
                'email'      => 'francesco.conti@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Sara',
                'lastname'   => 'Romano',
                'email'      => 'sara.romano@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Davide',
                'lastname'   => 'Colombo',
                'email'      => 'davide.colombo@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Elena',
                'lastname'   => 'Ricci',
                'email'      => 'elena.ricci@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Michele',
                'lastname'   => 'Bruno',
                'email'      => 'michele.bruno@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Chiara',
                'lastname'   => 'Galli',
                'email'      => 'chiara.galli@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Carlo',
                'lastname'   => 'Costa',
                'email'      => 'carlo.costa@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Laura',
                'lastname'   => 'Testa',
                'email'      => 'laura.testa@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Simone',
                'lastname'   => 'Serra',
                'email'      => 'simone.serra@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Daniela',
                'lastname'   => 'Barbieri',
                'email'      => 'daniela.barbieri@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Giuseppe',
                'lastname'   => 'Marino',
                'email'      => 'giuseppe.marino@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Anna',
                'lastname'   => 'Fontana',
                'email'      => 'anna.fontana@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Giovanni',
                'lastname'   => 'Moretti',
                'email'      => 'giovanni.moretti@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Beatrice',
                'lastname'   => 'Martini',
                'email'      => 'beatrice.martini@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
            [
                'username'   => 'Fabio',
                'lastname'   => 'Rizzo',
                'email'      => 'fabio.rizzo@example.com',
                'password'    => Hash::make('admin12345'),
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
