<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubregionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subregions')->insert([
            'subregion'=>'Mombasa',
            'region_id'=>1,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Kilifi',
            'region_id'=>1,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Malindi',
            'region_id'=>1,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Kitale',
            'region_id'=>2,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Kericho',
            'region_id'=>2,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Eldoret',
            'region_id'=>2,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Nandi',
            'region_id'=>2,
        ]);
        DB::table('subregions')->insert([
            'subregion'=>'Nyahururu',
            'region_id'=>2,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Baringo',
            'region_id'=>2,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Ngong/Kiserian',
            'region_id'=>3,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Machakos',
            'region_id'=>3,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Eastlands',
            'region_id'=>3,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Thika',
            'region_id'=>3,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Embu',
            'region_id'=>4,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Lower Eastern',
            'region_id'=>4,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Nanyuki',
            'region_id'=>4,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Karatina/Nyeri',
            'region_id'=>4,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Meru',
            'region_id'=>4,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Kakamega',
            'region_id'=>5,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Kisumu',
            'region_id'=>5,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Vihiga',
            'region_id'=>5,
        ]);
    DB::table('subregions')->insert([
            'subregion'=>'Migori',
            'region_id'=>6,
        ]);


    }
}
