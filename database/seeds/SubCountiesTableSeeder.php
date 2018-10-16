<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Coast,Mombasa
        DB::table('sub_counties')->insert([
            'subcounty'=>'Changamwe',
            'county_id'=>1,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Jomvu',
            'county_id'=>1,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kisauni',
            'county_id'=>1,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyali',
            'county_id'=>1,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Likoni',
            'county_id'=>1,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mvita',
            'county_id'=>1,
            'region_id'=>1
        ]);

        //Coast, Kwale
        DB::table('sub_counties')->insert([
            'subcounty'=>'Msambweni',
            'county_id'=>2,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Matuga',
            'county_id'=>2,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kinango',
            'county_id'=>2,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Lunga Lunga',
            'county_id'=>2,
            'region_id'=>1
        ]);

        //Coast, Kilifi
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kilifi North',
            'county_id'=>3,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kilifi South',
            'county_id'=>3,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kaloleni',
            'county_id'=>3,
            'region_id'=>1
        ]);

        DB::table('sub_counties')->insert([
            'subcounty'=>'Rabai',
            'county_id'=>3,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ganze',
            'county_id'=>3,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Malindi',
            'county_id'=>3,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Magarini',
            'county_id'=>3,
            'region_id'=>1
        ]);

        //Coast, Tana River
        DB::table('sub_counties')->insert([
           'subcounty'=>'Garsen',
            'county_id'=>4,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
           'subcounty'=>'Galole',
            'county_id'=>4,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
           'subcounty'=>'Bura',
            'county_id'=>4,
            'region_id'=>1
        ]);

        //Coast, Lamu
        DB::table('sub_counties')->insert([
           'subcounty'=>'Lamu West',
            'county_id'=>5,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Lamu East',
            'county_id'=>5,
            'region_id'=>1
        ]);

        //Coast, Taita Taveta
        DB::table('sub_counties')->insert([
           'subcounty'=>'Taveta' ,
            'county_id'=>6,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Wundanyi' ,
            'county_id'=>6,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mwatate' ,
            'county_id'=>6,
            'region_id'=>1
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Voi' ,
            'county_id'=>6,
            'region_id'=>1
        ]);

        // Rift Valley, Turkana
        DB::table('sub_counties')->insert([
            'subcounty'=>'Loima',
            'county_id'=>7,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Turkana Central',
            'county_id'=>7,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Turkana East',
            'county_id'=>7,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Turkana West',
            'county_id'=>7,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Turkana North',
            'county_id'=>7,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Turkana South',
            'county_id'=>7,
            'region_id'=>2
        ]);

        //Rift valley West pokot

        DB::table('sub_counties')->insert([
            'subcounty'=>'Kacheliba',
            'county_id'=>8,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kapenguria',
            'county_id'=>8,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Sigor',
            'county_id'=>8,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Pokot South',
            'county_id'=>8,
            'region_id'=>2
        ]);

        //Rift Valley Samburu
        DB::table('sub_counties')->insert([
            'subcounty'=>'Samburu East',
            'county_id'=>9,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Samburu West',
            'county_id'=>9,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Samburu North',
            'county_id'=>9,
            'region_id'=>2
        ]);

        //Rift Valley Transnzoia

        DB::table('sub_counties')->insert([
           'subcounty'=>'Cherangany',
            'county_id'=>10,
            'region_id'=>2
        ]);

        DB::table('sub_counties')->insert([
            'subcounty'=>'Kwanza',
            'county_id'=>10,
            'region_id'=>2
        ]);

        DB::table('sub_counties')->insert([
            'subcounty'=>'Saboti',
            'county_id'=>10,
            'region_id'=>2
        ]);

        DB::table('sub_counties')->insert([
            'subcounty'=>'Endebess',
            'county_id'=>10,
            'region_id'=>2
        ]);

        DB::table('sub_counties')->insert([
            'subcounty'=>'Kiminini',
            'county_id'=>10,
            'region_id'=>2
        ]);

        //Rift valley uasin gishu
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ainabkoi',
            'county_id'=>11,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kapseret',
            'county_id'=>11,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Turbo',
            'county_id'=>11,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kesses',
            'county_id'=>11,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Moiben',
            'county_id'=>11,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Soy',
            'county_id'=>11,
            'region_id'=>2
        ]);

        //Rift valley elgeyo marakwet
        DB::table('sub_counties')->insert([
            'subcounty'=>'Marakwet East',
            'county_id'=>12,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Marakwet West',
            'county_id'=>12,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Keiyo North',
            'county_id'=>12,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Keiyo South',
            'county_id'=>12,
            'region_id'=>2
        ]);

        //Rift valley nandi
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mosop',
            'county_id'=>13,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Emgwen',
            'county_id'=>13,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Aldai',
            'county_id'=>13,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tinderet',
            'county_id'=>13,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nandi Hills',
            'county_id'=>13,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Chesumei',
            'county_id'=>13,
            'region_id'=>2
        ]);

        //rift valley, Baringo
        DB::table('sub_counties')->insert([
            'subcounty'=>'Baringo Central',
            'county_id'=>14,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Baringo North',
            'county_id'=>14,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Baringo South',
            'county_id'=>14,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Eldama Ravine',
            'county_id'=>14,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mogotio',
            'county_id'=>14,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tiaty',
            'county_id'=>14,
            'region_id'=>2
        ]);

        //rift valley, Laikipia

        DB::table('sub_counties')->insert([
            'subcounty'=>'Laikipia North',
            'county_id'=>15,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Laikipia West',
            'county_id'=>15,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Laikipia East',
            'county_id'=>15,
            'region_id'=>2
        ]);


        //rift valley, nakuru
        DB::table('sub_counties')->insert([
            'subcounty'=>'Naivasha',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nakuru Town West',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nakuru Town East',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kuresoi South',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kuresoi North',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Molo',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Rongai',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Subukia',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Njoro',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Gilgil',
            'county_id'=>16,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bahati',
            'county_id'=>16,
            'region_id'=>2
        ]);


        //rift valley, Narok
        DB::table('sub_counties')->insert([
            'subcounty'=>'Narok North',
            'county_id'=>17,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Narok South',
            'county_id'=>17,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Narok East',
            'county_id'=>17,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Narok West',
            'county_id'=>17,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Emurua Dikir',
            'county_id'=>17,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kilgoris',
            'county_id'=>17,
            'region_id'=>2
        ]);

        //rift valley, kajiado

        DB::table('sub_counties')->insert([
            'subcounty'=>'Kajiado Central',
            'county_id'=>18,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kajiado North',
            'county_id'=>18,
            'region_id'=>2
        ]);        DB::table('sub_counties')->insert([
            'subcounty'=>'Kajiado West',
            'county_id'=>18,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kajiado South',
            'county_id'=>18,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kajiado East',
            'county_id'=>18,
            'region_id'=>2
        ]);


        //rift valley, kericho

        DB::table('sub_counties')->insert([
            'subcounty'=>'Ainamoi',
            'county_id'=>19,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Belgut',
            'county_id'=>19,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bureti',
            'county_id'=>19,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kipkelion East',
            'county_id'=>19,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kipkelion West',
            'county_id'=>19,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Sigowet-Soin',
            'county_id'=>19,
            'region_id'=>2
        ]);

        //rift valley, Bomet
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bomet Central',
            'county_id'=>20,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bomet East',
            'county_id'=>20,
            'region_id'=>2
        ]);
        DB::table('sub_counties')->insert([
        'subcounty'=>'Chepalungu',
        'county_id'=>20,
        'region_id'=>2
    ]);
        DB::table('sub_counties')->insert([
        'subcounty'=>'Sotik',
        'county_id'=>20,
        'region_id'=>2
    ]);
        DB::table('sub_counties')->insert([
        'subcounty'=>'Konoin',
        'county_id'=>20,
        'region_id'=>2
    ]);

        //nairobi , nairobi
        DB::table('sub_counties')->insert([
            'subcounty'=>'Westlands',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Dagoretti North',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Dagoretti South',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Langata',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kibra',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Roysambu',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kasarani',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ruaraka',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Embakasi South',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Embakasi North',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Embakasi Central',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Embakasi East',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Embakasi West',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Makadara',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kamukunji',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Starehe',
            'county_id'=>21,
            'region_id'=>3
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mathare',
            'county_id'=>21,
            'region_id'=>3
        ]);

        //central, nyandarua
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kinangop',
            'county_id'=>22,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kipipiri',
            'county_id'=>22,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ol kalou',
            'county_id'=>22,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ol Jorok',
            'county_id'=>22,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ndaragwa',
            'county_id'=>22,
            'region_id'=>4
        ]);

        //central nyeri
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tetu',
            'county_id'=>23,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kieni',
            'county_id'=>23,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mathira',
            'county_id'=>23,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Othaya',
            'county_id'=>23,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mukurweini',
            'county_id'=>23,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyeri Town',
            'county_id'=>23,
            'region_id'=>4
        ]);

        //central kirinyaga
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mwea',
            'county_id'=>24,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Gichugu',
            'county_id'=>24,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ndia',
            'county_id'=>24,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kirinyaga Central',
            'county_id'=>24,
            'region_id'=>4
        ]);

        //central muranga
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kangema',
            'county_id'=>25,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kiharu',
            'county_id'=>25,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mathioya',
            'county_id'=>25,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kigumo',
            'county_id'=>25,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kandara',
            'county_id'=>25,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Maragwa',
            'county_id'=>25,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Gatanga',
            'county_id'=>25,
            'region_id'=>4
        ]);

        //central , Kiambu
        DB::table('sub_counties')->insert([
            'subcounty'=>'Githunguru',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kiambaa',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kabete',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Limuru',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Lari',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Gatundu North',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Gatundu South',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ruiru',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kikuyu',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Juja',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Thika Town',
            'county_id'=>26,
            'region_id'=>4
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kiambu',
            'county_id'=>26,
            'region_id'=>4
        ]);

        //western kakamega
        DB::table('sub_counties')->insert([
            'subcounty'=>'Lugari',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Likuyani',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Malava',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Lurambi',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Navakholo',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mumias West',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mumias East',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Matungu',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Butere',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Khwisero',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Shinyalo',
            'county_id'=>27,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ikolomani',
            'county_id'=>27,
            'region_id'=>5
        ]);


        //western vihiga
        DB::table('sub_counties')->insert([
            'subcounty'=>'Emuhaya',
            'county_id'=>28,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Hamisi',
            'county_id'=>28,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Sabatia',
            'county_id'=>28,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
        'subcounty'=>'Vihiga',
        'county_id'=>28,
        'region_id'=>5
    ]);
        DB::table('sub_counties')->insert([
        'subcounty'=>'Luanda',
        'county_id'=>28,
        'region_id'=>5
    ]);
        //western bungoma
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bumula',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kabuchai',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kanduyi',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kimilili',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mt. Elgon',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Sirisia',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tongaren',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Webuye West',
            'county_id'=>29,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Webuye East',
            'county_id'=>29,
            'region_id'=>5
        ]);

        //western busia

        DB::table('sub_counties')->insert([
            'subcounty'=>'Nambale',
            'county_id'=>30,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Funyula',
            'county_id'=>30,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Butula',
            'county_id'=>30,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Budalangi',
            'county_id'=>30,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Matayos',
            'county_id'=>30,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Teso North',
            'county_id'=>30,
            'region_id'=>5
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Teso South',
            'county_id'=>30,
            'region_id'=>5
        ]);

        //siaya nyanza
        DB::table('sub_counties')->insert([
            'subcounty'=>'Alego',
            'county_id'=>31,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bondo',
            'county_id'=>31,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Gem',
            'county_id'=>31,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Rarieda',
            'county_id'=>31,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ugenya',
            'county_id'=>31,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ugunja',
            'county_id'=>31,
            'region_id'=>6
        ]);

        //kisumu nyanza
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kisumu East',
            'county_id'=>32,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kisumu West',
            'county_id'=>32,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kisumu central',
            'county_id'=>32,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Muhoroni',
            'county_id'=>32,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyakach',
            'county_id'=>32,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyando',
            'county_id'=>32,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Seme',
            'county_id'=>32,
            'region_id'=>6
        ]);

        //homabay nyanza
        DB::table('sub_counties')->insert([
            'subcounty'=>'Homa bay Town',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kabondo Kasipul',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Karachuonyo',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kasipul',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mbita',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Ndhiwa',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Rangwe',
            'county_id'=>33,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Suba',
            'county_id'=>33,
            'region_id'=>6
        ]);

        //migori nyanza

        DB::table('sub_counties')->insert([
            'subcounty'=>'Awendo',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kuria East',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kuria West',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyatike',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Rongo',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Suna East',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Suna West',
            'county_id'=>34,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Uriri',
            'county_id'=>34,
            'region_id'=>6
        ]);

        //kisii nyanza

        DB::table('sub_counties')->insert([
            'subcounty'=>'Bobasi',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bonchari',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bomachoge Borabu',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Bomachoge Chache',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitutu Chache North',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitutu Chache South',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyaribari Chache',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Nyaribari Masaba',
            'county_id'=>35,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'South Mugirango',
            'county_id'=>35,
            'region_id'=>6
        ]);

        //nyamira
        DB::table('sub_counties')->insert([
            'subcounty'=>'Borabu',
            'county_id'=>36,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitutu Masaba',
            'county_id'=>36,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'North Mugirango',
            'county_id'=>36,
            'region_id'=>6
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'West Mugirango',
            'county_id'=>36,
            'region_id'=>6
        ]);

        //garissa north eastern

        DB::table('sub_counties')->insert([
            'subcounty'=>'Garissa Township ',
            'county_id'=>37,
            'region_id'=>7
        ]);
                DB::table('sub_counties')->insert([
            'subcounty'=>'Fafi',
            'county_id'=>37,
            'region_id'=>7
        ]);
                DB::table('sub_counties')->insert([
            'subcounty'=>'Dadaab',
            'county_id'=>37,
            'region_id'=>7
        ]);
                DB::table('sub_counties')->insert([
            'subcounty'=>'Lagdera',
            'county_id'=>37,
            'region_id'=>7
        ]);
                DB::table('sub_counties')->insert([
            'subcounty'=>'Balambara',
            'county_id'=>37,
            'region_id'=>7
        ]);
                DB::table('sub_counties')->insert([
            'subcounty'=>'Ijara',
            'county_id'=>37,
            'region_id'=>7
        ]);


                //wajir n.e
        DB::table('sub_counties')->insert([
            'subcounty'=>'Eldas',
            'county_id'=>38,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tarbaj',
            'county_id'=>38,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Wajir North',
            'county_id'=>38,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Wajir East',
            'county_id'=>38,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Wajir West',
            'county_id'=>38,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Wajir South',
            'county_id'=>38,
            'region_id'=>7
        ]);

//        mandera ne
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mandera South',
            'county_id'=>39,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mandera East',
            'county_id'=>39,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mandera West',
            'county_id'=>39,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mandera North',
            'county_id'=>39,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Banisssa',
            'county_id'=>39,
            'region_id'=>7
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Lafey',
            'county_id'=>39,
            'region_id'=>7
        ]);

        //marsabit eastern

        DB::table('sub_counties')->insert([
            'subcounty'=>'Moyale',
            'county_id'=>40,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'North Horr',
            'county_id'=>40,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Saku',
            'county_id'=>40,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Laisamis',
            'county_id'=>40,
            'region_id'=>8
        ]);

//        isiolo eastern

        DB::table('sub_counties')->insert([
            'subcounty'=>'Isiolo North',
            'county_id'=>41,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Isiolo South',
            'county_id'=>41,
            'region_id'=>8
        ]);

        //meru eastern
        DB::table('sub_counties')->insert([
            'subcounty'=>'Igembe South',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Igembe Central',
            'county_id'=>42,
            'region_id'=>8
        ]);        DB::table('sub_counties')->insert([
            'subcounty'=>'Igembe North',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tigania West',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tigania East',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'North Imenti',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Buuri',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Central Imenti',
            'county_id'=>42,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'South Imenti',
            'county_id'=>42,
            'region_id'=>8
        ]);

        //tharakanithi
        DB::table('sub_counties')->insert([
            'subcounty'=>'Maara',
            'county_id'=>43,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Chuka',
            'county_id'=>43,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Tharaka',
            'county_id'=>43,
            'region_id'=>8
        ]);

        //embu eastern

        DB::table('sub_counties')->insert([
            'subcounty'=>'Manyatta',
            'county_id'=>44,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Runyenjes',
            'county_id'=>44,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mbeere North',
            'county_id'=>44,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mbeere South',
            'county_id'=>44,
            'region_id'=>8
        ]);

        //kitui
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitui Central',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitui West',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitui East',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitui South',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kitui Rural',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mwingi Central',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mwingi West',
            'county_id'=>45,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mwingi North',
            'county_id'=>45,
            'region_id'=>8
        ]);

        //machakos eastern
        DB::table('sub_counties')->insert([
            'subcounty'=>'Masinga',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Yatta',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kangundo',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Matungulu',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kathiani',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mavoko',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Machakos Town',
            'county_id'=>46,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mwala',
            'county_id'=>46,
            'region_id'=>8
        ]);
        //makueni
        DB::table('sub_counties')->insert([
            'subcounty'=>'Makueni',
            'county_id'=>47,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kaiti',
            'county_id'=>47,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kilome',
            'county_id'=>47,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kibwezi East',
            'county_id'=>47,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Kibwezi West',
            'county_id'=>47,
            'region_id'=>8
        ]);
        DB::table('sub_counties')->insert([
            'subcounty'=>'Mbooni',
            'county_id'=>47,
            'region_id'=>8
        ]);




































































































    }
}
