<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'edlásio',
            'email' => 'edlasio.pereira@hmiam.gov.ao',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'engracia',
            'email' => 'engracia.kiala@hmiam.gov.ao',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'celestino',
            'email' => 'celestino.sisione@hmiam.gov.ao',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'antonio',
            'email' => 'antonio.calenga@hmiam.gov.ao',
            'password' => Hash::make('password'),
        ]);

    }
}
