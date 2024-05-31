<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use function Laravel\Prompts\table;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        for ($x = 0; $x <=10; $x++){
            $name_input = 'name' + '$x';
            $email_input = 'email' + '$x' + '@email.com';
            $password_input = 'password' + '$x';

            DB::table('users')->insert([
            'name' => $name_input,
            'email' => $email_input,
            'password' => $password_input,
            ]);

        }

    
    }

    
        
    

}