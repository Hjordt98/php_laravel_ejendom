<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($x = 1; $x <= 10; $x++){
            DB::table('employees')->insert([
                'first_name' => "first_name_$x",
                'last_name' => "last_name_$x",
                'email' => "email_employee_$x@gmail.com",
                'phone' => "phone_$x",
                'company_id' => $x // Assuming you have 10 companies with IDs 1 to 10
            ]);
        }
    }
}
