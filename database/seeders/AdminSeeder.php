<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'gender' => 'Female',
            'email_verified_at' =>  now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(15),
        ])->assignRole('admin');

        User::create([
            'name' => 'dominic',
            'email' => 'dominic@gmail.com',
            'gender' => 'Male',
            'email_verified_at' =>  now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(15),
        ])->assignRole('user');
    }
}