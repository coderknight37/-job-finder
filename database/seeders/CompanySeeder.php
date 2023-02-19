<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("companies")->delete();
        $data = [
            [
                "admin_id" => 1,
                "name" => "Google",
                "password" => bcrypt('1235'),
                "address" => "USA, California",
                "phone" => 225,
                "website" => "https://www.google.com",
                "email" => "b4ill@gmail.com",
                "logo" => "img.jpg",
                "cover_photo" => "img.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!"
            ], [
                "admin_id" => 1,
                "name" => "yahoo",
                "password" => bcrypt('1235'),
                "address" => "USA, California",
                "phone" => 225,
                "website" => "https://www.yahoo.com",
                "logo" => "img.jpg",
                "cover_photo" => "img.jpg",
                "email" => "bi3ll@gmail.com",

                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!"
            ],
            [
                "admin_id" => 1,
                "name" => "gmail",
                "password" => bcrypt('1235'),
                "address" => "USA, California",
                "phone" => 225,
                "website" => "https://www.gmail.com",
                "email" => "bi2ll@gmail.com",

                "logo" => "img.jpg",
                "cover_photo" => "img.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!"
            ],
            [
                "admin_id" => 1,
                "name" => "hotmail",

                "address" => "Indo California",
                "phone" => 225,
                "website" => "https://www.hotmail.com",
                "email" => "bil1l@gmail.com",
                "password" => bcrypt('1235'),
                "logo" => "img.jpg",
                "cover_photo" => "img.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!"
            ],
        ];

        foreach ($data as $items) {
            Company::create($items);
        }
    }
}

