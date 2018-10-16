<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //coast
        DB::table('counties')->insert([
            'county'=>'Mombasa',
            'region_id'=>1
        ]);
        DB::table('counties')->insert([
           'county'=>'Kwale',
            'region_id'=>1
        ]);
        DB::table('counties')->insert([
           'county'=>'Kilifi',
            'region_id'=>1
        ]);DB::table('counties')->insert([
           'county'=>'Tana River',
            'region_id'=>1
        ]);DB::table('counties')->insert([
           'county'=>'Lamu',
            'region_id'=>1
        ]);DB::table('counties')->insert([
           'county'=>'Taita Taveta',
            'region_id'=>1
        ]);

        //Rift Valley
        DB::table('counties')->insert([
           'county'=>'Turkana',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'West Pokot',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Samburu',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Trans-Nzoia',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Uasin Gishu',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Elgeyo Marakwet',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Nandi',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Baringo',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Laikipia',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Nakuru',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Narok',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Kajiado',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Kericho',
            'region_id'=>2
        ]);
        DB::table('counties')->insert([
            'county'=>'Bomet',
            'region_id'=>2
        ]);

        //Nairobi
        DB::table('counties')->insert([
           'county'=>'Nairobi',
            'region_id'=>3
        ]);


        //Central
        DB::table('counties')->insert([
           'county'=>'Nyandarua',
           'region_id'=>4
        ]);
        DB::table('counties')->insert([
            'county'=>'Nyeri',
            'region_id'=>4
        ]);
        DB::table('counties')->insert([
            'county'=>'Kirinyaga',
            'region_id'=>4
        ]);
        DB::table('counties')->insert([
            'county'=>'Muranga\'a',
            'region_id'=>4
        ]);
        DB::table('counties')->insert([
            'county'=>'Kiambu',
            'region_id'=>4
        ]);

        //western
        DB::table('counties')->insert([
           'county'=>'Kakamega',
           'region_id'=>5
        ]);
        DB::table('counties')->insert([
            'county'=>'Vihiga',
            'region_id'=>5
        ]);
        DB::table('counties')->insert([
            'county'=>'Bungoma',
            'region_id'=>5
        ]);
        DB::table('counties')->insert([
            'county'=>'Busia',
            'region_id'=>5
        ]);

        //Nyanza
        DB::table('counties')->insert([
           'county'=>'Siaya',
            'region_id'=>6
        ]);
        DB::table('counties')->insert([
            'county'=>'Kisumu',
            'region_id'=>6
        ]);
        DB::table('counties')->insert([
            'county'=>'Homa Bay',
            'region_id'=>6
        ]);
        DB::table('counties')->insert([
            'county'=>'Migori',
            'region_id'=>6
        ]);
        DB::table('counties')->insert([
            'county'=>'Kisii',
            'region_id'=>6
        ]);
        DB::table('counties')->insert([
            'county'=>'Nyamira',
            'region_id'=>6
        ]);

        //North Eastern

        DB::table('counties')->insert([
           'county'=>'Garissa',
            'region_id'=>7
        ]);
        DB::table('counties')->insert([
           'county'=>'Wajir',
            'region_id'=>7
        ]);
        DB::table('counties')->insert([
           'county'=>'Mandera',
            'region_id'=>7
        ]);


        //Eastern
        DB::table('counties')->insert([
            'county'=>'Marsabit',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Isiolo',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Meru',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Tharaka Nithi',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Embu',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Kitui',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Machakos',
            'region_id'=>8
        ]);
        DB::table('counties')->insert([
            'county'=>'Makueni',
            'region_id'=>8
        ]);

    }
}
