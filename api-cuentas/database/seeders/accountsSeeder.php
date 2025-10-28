<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class accountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('accounts')->insert([
            'name'=>'Cuenta1 ',
            'amount'=>100.99,
            'status'=>'Activa',
            'user_id'=>1,
            'created_at'=>date('y-m-d h:m:s')
        ]);

        DB::table('accounts')->insert([
            'name'=>'Cuenta2 ',
            'amount'=>48.99,
            'status'=>'Activa',
            'user_id'=>2,
            'created_at'=>date('y-m-d h:m:s')
        ]);

        DB::table('accounts')->insert([
            'name'=>'Cuenta3 ',
            'amount'=>48.99,
            'status'=>'Activa',
            'user_id'=>3,
            'created_at'=>date('y-m-d h:m:s')
        ]);
    }
}
