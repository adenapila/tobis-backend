<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit')->insert([
            'branchcode'=> 'GR',
            'code_unit'=> 'SP-B01.01',
            'type_unit'=> 'Sapphire 2 LT',
            'block_unit' => 'B01',
            'no_unit' => 1,
            'lt_unit' => 96,
            'lb_unit' => 65,
            'status_unit' => 'availabe',
            'code_costumer' => 'CR01',
            'name_costumer' => 'tombak intan',
            'price' => 1498200000
            ]);
    }
}
