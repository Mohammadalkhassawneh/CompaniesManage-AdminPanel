<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 1,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 2,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 3,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 4,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 5,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 6,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 7,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 8,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 9,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            [
                'first_name' => "admin",
                'last_name' => 'admin@admin.com',
                'company_id' => 10,
                'email' => Str::random(7).'@gmail.com',
                'phone' => '0777777777'
            ],
            
            
       
        ]);
    }
}











































