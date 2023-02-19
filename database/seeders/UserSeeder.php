<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table("users")->delete();
        $data = [
            "name"  => "bill",
            "email" => "bill@gmail.com",
            "password"  => bcrypt("12345"),
        ];

        User::create($data);
    }
}
