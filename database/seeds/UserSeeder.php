<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

      
      

      //membuat sample user admin
        $admin = new User;
        $admin->name = "Admin";
       	$admin->email ="admin@habibcenter.com";
       	$admin->password = bcrypt('admin@habibcenter');
       	$admin->save();
       	$admin->attachRole($adminRole);
    }
}
