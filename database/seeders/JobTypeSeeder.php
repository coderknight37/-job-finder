<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("job_types")->delete();
        $data = ["Featured", "Full Time", "Part Time"];

        foreach ($data as $items) {
            JobType::create(["type" => $items]);
        }
    }
}
