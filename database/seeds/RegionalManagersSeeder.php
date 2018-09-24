<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regional_managers')->insert([
            'name'=>'Beatrice Wambui',
            'phoneNumber'=>'1234567890',
            'region_id'=>1,

        ]); DB::table('regional_managers')->insert([
            'name'=>'Irene Sadera',
            'phoneNumber'=>'1234567890',
            'region_id'=>2,

        ]); DB::table('regional_managers')->insert([
            'name'=>'Abiud Nyaga',
            'phoneNumber'=>'1234567890',
            'region_id'=>3,

        ]); DB::table('regional_managers')->insert([
            'name'=>'Josiah Obiero',
            'phoneNumber'=>'1234567890',
            'region_id'=>4,

        ]); DB::table('regional_managers')->insert([
            'name'=>'Dennis Masea',
            'phoneNumber'=>'1234567890',
            'region_id'=>5,

        ]); DB::table('regional_managers')->insert([
            'name'=>'Otieno Akoko',
            'phoneNumber'=>'1234567890',
            'region_id'=>6,

        ]);

    }
}
