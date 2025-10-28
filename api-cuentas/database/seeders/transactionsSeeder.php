<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class transactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('transactions')->insert([
            'amount'=>100.00,
            'type'=>'Tipo 1',
            'description'=>'Hola',
            'user_id'=>1,
            'category_id'=>1,
            'account_id'=>1,
            'created_at'=>date('y-m-d h:m:s')
        ]);
        DB::table('transactions')->insert([
            'amount'=>200.50,
            'type'=>'Tipo 2',
            'description'=>'Hola',
            'user_id'=>2,
            'category_id'=>2,
            'account_id'=>2,
            'created_at'=>date('y-m-d h:m:s')
        ]);
        DB::table('transactions')->insert([
            'amount'=>600.00,
            'type'=>'Tipo 3',
            'description'=>'Hola',
            'user_id'=>3,
            'category_id'=>3,
            'account_id'=>3,
            'created_at'=>date('y-m-d h:m:s')
        ]);
    }
}
