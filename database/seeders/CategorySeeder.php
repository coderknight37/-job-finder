<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("categories")->delete();
        $data = ["HR", "IT", "Accounting", "Data Entry"];

        foreach ($data as $items) {
            category::create(["name" => $items]);
        }
    }
}
