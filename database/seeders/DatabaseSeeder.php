<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'root',
            'lastname' => 'root',
            'address' => 'Quito',
            'birthday' => Date::now(),
            'email' => 'jorgeluis33ariosa@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}