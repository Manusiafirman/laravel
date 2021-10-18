<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
['name'=>'Firman Romansyah', 'bornDate'=>'2003-11-13', 'gender' =>'Laki-laki', 'addres'=>'Kp.cilebak', 'religion'=> 'Islam', 'age'=>'17', 'hobby'=>"Bermain Game, Nonton"],
['name'=>'Firman Romansyah', 'bornDate'=>'2003-11-13', 'gender' =>'Laki-laki', 'addres'=>'Kp.cilebak', 'religion'=> 'Islam', 'age'=>'17', 'hobby'=>"Bermain Game, Nonton"],
['name'=>'Firman Romansyah', 'bornDate'=>'2003-11-13', 'gender' =>'Laki-laki', 'addres'=>'Kp.cilebak', 'religion'=> 'Islam', 'age'=>'17', 'hobby'=>"Bermain Game, Nonton"],
['name'=>'Firman Romansyah', 'bornDate'=>'2003-11-13', 'gender' =>'Laki-laki', 'addres'=>'Kp.cilebak', 'religion'=> 'Islam', 'age'=>'17', 'hobby'=>"Bermain Game, Nonton"],
['name'=>'Firman Romansyah', 'bornDate'=>'2003-11-13', 'gender' =>'Laki-laki', 'addres'=>'Kp.cilebak', 'religion'=> 'Islam', 'age'=>'17', 'hobby'=>"Bermain Game, Nonton"]
];
// masukkan data ke database
DB::table('biodatas')->insert($biodatas);

    }
}
