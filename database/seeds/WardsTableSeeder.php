<?php
//
//use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//
//class WardsTableSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//        //COAST
//        //MOMBASA
//        //changamwe
//        DB::table('wards')->insert([
//           'ward'=>'Port Reitz',
//            'subcounty_id'=>1,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//        DB::table('wards')->insert([
//            'ward'=>'Kipevu',
//            'subcounty_id'=>1,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//        DB::table('wards')->insert([
//            'ward'=>'Airport',
//            'subcounty_id'=>1,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//        DB::table('wards')->insert([
//            'ward'=>'Miritini',
//            'subcounty_id'=>1,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//        DB::table('wards')->insert([
//            'ward'=>'Chaani',
//            'subcounty_id'=>1,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//
//
//        //jomvu
//        DB::table('wards')->insert([
//            'ward'=>'Jomvu Kuu ',
//            'subcounty_id'=>2,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//        DB::table('wards')->insert([
//            'ward'=>'Mikindani ',
//            'subcounty_id'=>2,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//        DB::table('wards')->insert([
//            'ward'=>'Magongo',
//            'subcounty_id'=>2,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//        //kisauni
//        DB::table('wards')->insert([
//            'ward'=>'',
//            'subcounty_id'=>3,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//
//
//        //nyali
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>4,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//
//
//        //likoni
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>5,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//
//        //mvita
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>6,
//            'county_id'=>1,
//            'region_id'=>1
//        ]);
//
//
//        //KWALE
//
//        //msambweni
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>7,
//            'county_id'=>2,
//            'region_id'=>1
//        ]);
//
//
//
//
//        //matuga
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>8,
//            'county_id'=>2,
//            'region_id'=>1
//        ]);
//
//
//        //kinango
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>9,
//            'county_id'=>2,
//            'region_id'=>1
//        ]);
//
//
//        //Lunga lunga
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>10,
//            'county_id'=>2,
//            'region_id'=>1
//        ]);
//
//
//        //KILIFI
//
//        //Kilifi north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>11,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//        //kilifi south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>12,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//        //kaloleni
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>13,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//        //rabai
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>14,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//        //ganze
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>15,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//        //Malindi
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>16,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//        //magarini
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>17,
//            'county_id'=>3,
//            'region_id'=>1
//        ]);
//
//
//
////        TANA RIVER
//
//        //garsen
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>18,
//            'county_id'=>4,
//            'region_id'=>1
//        ]);
//
//        //galole
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>19,
//            'county_id'=>4,
//            'region_id'=>1
//        ]);
//
//        //bura
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>20,
//            'county_id'=>4,
//            'region_id'=>1
//        ]);
//
//
//        //LAMU
//
//        //Lamu west
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>21,
//            'county_id'=>5,
//            'region_id'=>1
//        ]);
//
//        //lamu east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>22,
//            'county_id'=>5,
//            'region_id'=>1
//        ]);
//
//
//        //TAITA
//
//        //taveta
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>23,
//            'county_id'=>6,
//            'region_id'=>1
//        ]);
//
//        //wundayi
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>24,
//            'county_id'=>6,
//            'region_id'=>1
//        ]);
//
//        //mwatate
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>25,
//            'county_id'=>6,
//            'region_id'=>1
//        ]);
//
//
//        //voi
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>26,
//            'county_id'=>6,
//            'region_id'=>1
//        ]);
//
//
//        //RIFT VALLEY
//        //TURKANA
//
//        //Loima
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>27,
//            'county_id'=>7,
//            'region_id'=>2
//        ]);
//
//        //Turkana central
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>28,
//            'county_id'=>7,
//            'region_id'=>2
//        ]);
//
//
//        //turkana east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>29,
//            'county_id'=>7,
//            'region_id'=>2
//        ]);
//
//        //turkana west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>30,
//            'county_id'=>7,
//            'region_id'=>2
//        ]);
//
//
//        //turkana north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>31,
//            'county_id'=>7,
//            'region_id'=>2
//        ]);
//
//        //turkana south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>32,
//            'county_id'=>7,
//            'region_id'=>2
//        ]);
//
//        //WEST POKOT
//        //Kacheliba
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>33,
//            'county_id'=>8,
//            'region_id'=>2
//        ]);
//
//
//        //kapenguuria
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>34,
//            'county_id'=>8,
//            'region_id'=>2
//        ]);
//
//        //sigor
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>35,
//            'county_id'=>8,
//            'region_id'=>2
//        ]);
//
//        //pokot south
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>36,
//            'county_id'=>8,
//            'region_id'=>2
//        ]);
//
//
//        //SAMBURU
//        //samburu east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>37,
//            'county_id'=>9,
//            'region_id'=>2
//        ]);
//
//        //samburu west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>38,
//            'county_id'=>9,
//            'region_id'=>2
//        ]);
//
//        //samburu north
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>39,
//            'county_id'=>9,
//            'region_id'=>2
//        ]);
//
//
//        //TRANS-ZOIA
//        //cheranganyi
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>40,
//            'county_id'=>10,
//            'region_id'=>2
//        ]);
//
//        //kwanza
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>41,
//            'county_id'=>10,
//            'region_id'=>2
//        ]);
//
//
//        //saboti
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>42,
//            'county_id'=>10,
//            'region_id'=>2
//        ]);
//
//        //endebess
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>43,
//            'county_id'=>10,
//            'region_id'=>2
//        ]);
//
//
//        //kiminini
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>44,
//            'county_id'=>10,
//            'region_id'=>2
//        ]);
//
//
//        //UASIN GISHU
//        //ainabkoi
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>45,
//            'county_id'=>11,
//            'region_id'=>2
//        ]);
//
//
//        //Kapseret
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>46,
//            'county_id'=>11,
//            'region_id'=>2
//        ]);
//
//
//        //turbo
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>47,
//            'county_id'=>11,
//            'region_id'=>2
//        ]);
//
//        //kesses
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>48,
//            'county_id'=>11,
//            'region_id'=>2
//        ]);
//
//
//        //moiben
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>49,
//            'county_id'=>11,
//            'region_id'=>2
//        ]);
//
//        //soy
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>50,
//            'county_id'=>11,
//            'region_id'=>2
//        ]);
//
//
//
//        //ELGEYO MARAKWET
//        //marakwet east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>51,
//            'county_id'=>12,
//            'region_id'=>2
//        ]);
//
//        //marakwet west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>52,
//            'county_id'=>12,
//            'region_id'=>2
//        ]);
//
//        //keiyo north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>53,
//            'county_id'=>12,
//            'region_id'=>2
//        ]);
//        //keiyo south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>54,
//            'county_id'=>12,
//            'region_id'=>2
//        ]);
//
//
//        //NANDI
//        //mosop
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>55,
//            'county_id'=>13,
//            'region_id'=>2
//        ]);
//
//        //emgwen
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>56,
//            'county_id'=>13,
//            'region_id'=>2
//        ]);
//
//
//        //aldai
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>57,
//            'county_id'=>13,
//            'region_id'=>2
//        ]);
//
//
//
//        //tinderet
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>58,
//            'county_id'=>13,
//            'region_id'=>2
//        ]);
//
//
//
//        //nandi hills
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>59,
//            'county_id'=>13,
//            'region_id'=>2
//        ]);
//
//
//        //chesumei
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>60,
//            'county_id'=>13,
//            'region_id'=>2
//        ]);
//
//
//
//        //BARINGO
//        //baringo central
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>61,
//            'county_id'=>14,
//            'region_id'=>2
//        ]);
//
//        //baringo north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>62,
//            'county_id'=>,
//            'region_id'=>2
//        ]);
//
//
//        //baringo south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>63,
//            'county_id'=>14,
//            'region_id'=>2
//        ]);
//
//
//        //eldama ravine
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>64,
//            'county_id'=>14,
//            'region_id'=>2
//        ]);
//
//
//
//        //Mogotio
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>65,
//            'county_id'=>14,
//            'region_id'=>2
//        ]);
//
//
//
//        //tiaty
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>66,
//            'county_id'=>14,
//            'region_id'=>2
//        ]);
//
//
//        // LAIKIPIA
//        //Laikipia north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>67,
//            'county_id'=>15,
//            'region_id'=>2
//        ]);
//
//
//        //Laikipia west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>68,
//            'county_id'=>15,
//            'region_id'=>2
//        ]);
//
//
//        //laikipia east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>69,
//            'county_id'=>15,
//            'region_id'=>2
//        ]);
//
//
//
//        //NAKURU
//        //naivasha
//
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>70,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//
//
//        //nakuru town west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>71,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//
//        //nakuru town east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>72,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//
//
//        //kuresoi south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>73,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//
//
//
//        //kuresoi north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>74,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//        //molo
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>75,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//
//        //rongai
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>76,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//        //subukia
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>77,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//        //njoro
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>78,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//
//
//        //gilgil
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>79,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//        //bahati
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>80,
//            'county_id'=>16,
//            'region_id'=>2
//        ]);
//
//        //NAROK
//
//        //narok north
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>81,
//            'county_id'=>17,
//            'region_id'=>2
//        ]);
//
//        //narok south
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>82,
//            'county_id'=>17,
//            'region_id'=>2
//        ]);
//
//
//        //narok east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>83,
//            'county_id'=>17,
//            'region_id'=>2
//        ]);
//
//
//        //narok west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>84,
//            'county_id'=>17,
//            'region_id'=>2
//        ]);
//
//
//
//        //emurua dikir
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>85,
//            'county_id'=>17,
//            'region_id'=>2
//        ]);
//
//
//        //kilgoris
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>86,
//            'county_id'=>17,
//            'region_id'=>2
//        ]);
//
//
//        //KAJIADO
//
//        //Kajiado central
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>87,
//            'county_id'=>18,
//            'region_id'=>2
//        ]);
//
//
//        //kajiado north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>88,
//            'county_id'=>18,
//            'region_id'=>2
//        ]);
//
//        //kajiado west
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>89,
//            'county_id'=>18,
//            'region_id'=>2
//        ]);
//
//
//        //kajiado south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>90,
//            'county_id'=>18,
//            'region_id'=>2
//        ]);
//
//
//        //kajiado east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>91,
//            'county_id'=>18,
//            'region_id'=>2
//        ]);
//
//
//
//
//        //KERICHO
//        //ainamoi
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>92,
//            'county_id'=>19,
//            'region_id'=>2
//        ]);
//
//
//        //belgut
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>93,
//            'county_id'=>19,
//            'region_id'=>2
//        ]);
//
//
//        //bureti
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>94,
//            'county_id'=>19,
//            'region_id'=>2
//        ]);
//
//
//        //kipkelion east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>95,
//            'county_id'=>19,
//            'region_id'=>2
//        ]);
//
//        //kipkelion west
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>96,
//            'county_id'=>19,
//            'region_id'=>2
//        ]);
//
//        //sigowet soin
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>97,
//            'county_id'=>19,
//            'region_id'=>2
//        ]);
//
//
//        //BOMET
//        //Bomet central
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>98,
//            'county_id'=>20,
//            'region_id'=>2
//        ]);
//
//        //bomet east
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>99,
//            'county_id'=>20,
//            'region_id'=>2
//        ]);
//
//
//
//        //chepalungu
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>100,
//            'county_id'=>20,
//            'region_id'=>2
//        ]);
//
//        //sotik
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>101,
//            'county_id'=>20,
//            'region_id'=>2
//        ]);
//
//
//
//
//        //konoin
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>102,
//            'county_id'=>20,
//            'region_id'=>2
//        ]);
//
//
//       // NAIROBI
//
//        //westlands
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>103,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//        //dagoretti north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>104,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //dagoretti south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>105,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //langata
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>106,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //kibra
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>107,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //roysambu
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>108,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //kasarani
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>109,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//
//
//
//        //ruaraka
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>110,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //embakasi south
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>111,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //embakasi north
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>112,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //embakasi central
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>113,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//
//        //embakasi east
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>114,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//        //embakasi west
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>115,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//        //makadara
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>116,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//        //kamukunji
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>117,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//
//        //starehe
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>118,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//
//
//        //mathare
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>119,
//            'county_id'=>21,
//            'region_id'=>3
//        ]);
//
//
//
//        //KIAMBU
//        // NYANDARUA
//
//        //kinangop
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>120,
//            'county_id'=>22,
//            'region_id'=>4
//        ]);
//
//
//        //kipipiri
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>121,
//            'county_id'=>22,
//            'region_id'=>4
//        ]);
//
//
//        //ol kalou
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>122,
//            'county_id'=>22,
//            'region_id'=>4
//        ]);
//
//
//        //ol jorok
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>123,
//            'county_id'=>22,
//            'region_id'=>4
//        ]);
//
//        //ndaragwa
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>124,
//            'county_id'=>22,
//            'region_id'=>4
//        ]);
//
//
//        //NYERI.
//        //tetu
//
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>125,
//            'county_id'=>23,
//            'region_id'=>4
//        ]);
//
//
//        //kieni
//        DB::table('wards')->insert([
//            'ward'=>' ',
//            'subcounty_id'=>126,
//            'county_id'=>23,
//            'region_id'=>4
//        ]);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//    }
//}
