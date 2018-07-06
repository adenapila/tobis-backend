<?php

use Illuminate\Database\Seeder;

class MarketingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marketing')->insert([
            'branchcode' => 'GR',
            'code' => 'M0001',
            'email' => 'tobi@gmail.com',
            'password' => 'tobi123',
            'api_token' => 123456,
            'name' => 'Andi',
            'address' => 'Jl. Puasa',
            'phone' => 85645445589,
            'phone2' => 217420099,
            'ktp' => 36245456245,
            'npwp' => 1564541213,
            'komisi' => 7000000,
            'agent' => 'Agent',
        ]);
    }
}
