<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $memberRole = new  Role();
        $memberRole->name = "agent";
        $memberRole->display_name = "Agent";
        $memberRole->save();

        $memberRole = new  Role();
        $memberRole->name = "sales";
        $memberRole->display_name = "Sales";
        $memberRole->save();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@tobi.com';
        $admin->password = bcrypt('admin1');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name = "Agent";
        $member->email = "agent@tobi.com";
        $member->password = bcrypt('agent1');
        $member->save();
        $member->attachRole($agentRole);

        $member = new User();
        $member->name = "Sales";
        $member->email = "sales@tobi.com";
        $member->password = bcrypt('sales1');
        $member->save();
        $member->attachRole($salesRole);
    }
}
