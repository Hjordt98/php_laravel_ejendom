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
            $first_name = sprintf("first_name_employee_$x", $x);
            $last_name = sprintf("last_name_employee_$x", $x);
            $email = sprintf("email_employee_$x@gmail.com", $x);
            $phone = sprintf("phone_employee_$x", $x);

            DB::table('employees')->insert([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone' => $phone,
                'employee_id' => $x // Assuming you have 10 companies with IDs 1 to 10
            ]);
        }
    }
}
