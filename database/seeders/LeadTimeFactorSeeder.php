<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadTimeFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factors = [
            [
              'name' => 'Long Lead Time',
              'lead_time_factor_range' => '20-40 % of ADU over ASRLT'  
            ],
            [
              'name' => 'Medium Lead Time',
              'lead_time_factor_range' => '41‐60% of ADU over ASRLT'  
            ],
            [
              'name' => 'Short Lead Time',
              'lead_time_factor_range' => '61‐100% of ADU over ASRLT'  
            ],
        ];

        DB::table('lead_time_factors')->insert($factors);
    }
}
