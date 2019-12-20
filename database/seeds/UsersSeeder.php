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
        // // Buat role admin
        // $adminRole = new Role();
        // $adminRole->name =  "admin";
        // $adminRole->display_name = "Admin";
        // $adminRole->save();

        // Buat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        // $memberRole->save();

        // Membuat sample admin
        // $admin = new User();
        // $admin->name = 'Admin Rayhan';
        // $admin->email = 'adminray@gmail.com';
        // $admin->password = bcrypt('123456');
        // $admin->save();
        // $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Rayhan";
        $member->email = 'rayhan@gmail.com';
        $member->password = bcrypt('123456');
        $member->save();
        $member->attachRole($memberRole);

    }
}
