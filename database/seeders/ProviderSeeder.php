<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_providers')->insert([
            'name'=>'Miguel Angel',
            'last_name'=>'Manrroy',
            'email'=>'miguel@gmail.com',
            'phone'=>'5563148952',
            'rfc'=>'RFC259685QF5',
            'address'=>'Naucalpan 58964',
            'status'=>'1'
        ] );
        DB::table('imaq_providers')->insert([
            'name'=>'Monica',
            'last_name'=>'Lopez',
            'email'=>'monica@gmail.com',
            'phone'=>'5563148952',
            'rfc'=>'RFC259685QF5',
            'address'=>'Aguscalientes 58964',
            'status'=>'1'
        ] );
        DB::table('imaq_providers')->insert([
            'name'=>'Luis',
            'last_name'=>'Lopez',
            'email'=>'luis@gmail.com',
            'phone'=>'5563148952',
            'rfc'=>'RFC259685QF5',
            'address'=>'Puebla 58964',
            'status'=>'1'
        ] );
    }
}
