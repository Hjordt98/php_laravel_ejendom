<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use function Laravel\Prompts\table;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {

        $this->call([
            CompaniesSeeder::class,
            EmployeeSeeder::class,
        ]);


        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        for ($x = 0; $x <=10; $x++){
            $name_input_employee = sprintf("name_user_$x",$x);
            $email_input_employee = sprintf("email_user_$x@gmail.com,$x");
            $password_input = sprintf("password_user_$x, $x");

            DB::table('users')->insert([
            'name' => $name_input_employee,
            'email' => $email_input_employee,
            'password' => $password_input,
            ]);
        }

    }

}