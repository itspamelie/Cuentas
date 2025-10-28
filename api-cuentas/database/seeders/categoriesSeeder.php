<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name'=>'Categoria 1 ',
            'type'=>'Tipo 1',
            'user_id'=>1,
            'created_at'=>date('y-m-d h:m:s')
        ]);

        DB::table('categories')->insert([
            'name'=>'Categoria 2 ',
            'type'=>'Tipo 2',
            'user_id'=>2,
            'created_at'=>date('y-m-d h:m:s')
        ]);
         DB::table('categories')->insert([
            'name'=>'Categoria 3 ',
            'type'=>'Tipo 3',
            'user_id'=>3,
            'created_at'=>date('y-m-d h:m:s')
        ]);
    }
}
