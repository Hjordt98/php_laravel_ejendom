<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($x = 0; $x <=10; $x++){
            $name_input_companies = sprintf("name_company_$x",$x);
            $email_input_companies = sprintf("email_company_$x@gmail.com,$x");
            $logo_input_companies = sprintf("logo_company_$x, $x");
            $website_input_companies = sprintf("website_company_$x",$x);

            DB::table('Companies')->insert([
            'name' => $name_input_companies,
            'email' => $email_input_companies,
            'logo' => $logo_input_companies,
            'website' => $website_input_companies,
            ]);
        }
    }

}