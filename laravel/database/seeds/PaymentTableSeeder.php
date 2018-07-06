<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment')->insert([
            'branchcode'=> 'GR',
            'booking_no'=> 'SP-A02.08/24-5-2018',
            'code_customer'=> 'C2018524144346',
            'name_customer' => 'USER 1',
            'code_unit' => 'SP-A02.08',
            'type_unit' => 'Sapphire 1 LT',
            'price_unit' => 1060888889,
            'first_payment' => 5000000,
            'type_payment' => 'KPR',
            'dp' => 313266667,
            'kpr' => 742622222,
            'cash' => 0,
            'reveral_code' => 1
            ]);
    }
}
