<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'region'=>'Coast'
        ]);
        DB::table('regions')->insert([
            'region'=>'Rift Valley'
        ]);
        DB::table('regions')->insert([
            'region'=>'Nairobi'
        ]);
        DB::table('regions')->insert([
            'region'=>'Central'
        ]);
        DB::table('regions')->insert([
            'region'=>'Western'
        ]);
        DB::table('regions')->insert([
            'region'=>'Nyanza'
        ]);
        DB::table('regions')->insert([
           'region'=>'North Eastern'
        ]);
        DB::table('regions')->insert([
            'region'=>'Eastern'
        ]);



    }
}
