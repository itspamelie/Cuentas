<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for($i=0;$i<50;$i++) {
             DB::table('users')->insert([
            'name'=>'Admin '.$i,
            'email'=>'Admin'.$i.'@gmail.com',
            'password'=>Hash::make('123'),
            'img'=>'default.jpg',
        ]);
    }
}
}