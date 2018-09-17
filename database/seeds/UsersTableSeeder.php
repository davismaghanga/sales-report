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
            'user_type'=>1 //1 is the admin
        ]);
    }
}
