<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(UnitTableSeeder::class);
        $this->call(MarketingTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(Category_PaymentTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(CostingTableSeeder::class);
    }
}
