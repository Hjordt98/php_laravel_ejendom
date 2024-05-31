<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($x = 1; $x <= 10; $x++){
            DB::table('companies')->insert([
                'name' => "name_company_$x",
                'email' => "email_company_$x@gmail.com",
                'logo' => null, // Adjust as needed
                'website' => "website_company_$x"
            ]);
        }
    }
}
