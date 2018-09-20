<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Davis Maghanga',
            'email'=>'davis@storymojaafrica.co.ke',
            'password'=>bcrypt('secret'),
            //1 is the admin
            'user_type'=>1,
//            'region_id'=>1,
//            'subregion_id'=>1,
            'contacts'=>'0789055371',
            'location'=>'Lower Kabete, Spring Valley',
            'dob'=>'16/04/1996',

        ]);
    }
}
