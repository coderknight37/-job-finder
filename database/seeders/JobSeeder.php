<?php

namespace Database\Seeders;

use App\Models\job;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("jobs")->delete();
        $data = [
            [
                "user_id" => 1,
                "company_id" => 1,
                "title" => "Software Engineering",
                "slug" => "software_engineering",
                "category_id" => 2,
                "position" =>  "Programmer",
                "address" => "Aden",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 1,
            ],
            [
                "user_id" => 1,
                "company_id" => 2,
                "title" => "Web Development",
                "slug" => "software_engineering",
                "category_id" => 2,
                "position" =>  "Programmer",
                "address" => "Sanaa",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 2,
            ],
            [
                "user_id" => 1,
                "company_id" => 3,
                "title" => "Android Engineering",
                "slug" => "android_engineering",
                "category_id" => 2,
                "position" =>  "Programmer",
                "address" => "Taiz",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 1,
            ],
            [
                "user_id" => 1,
                "company_id" => 1,
                "title" => "HR Manager",
                "slug" => "hr",
                "category_id" => 1,
                "position" =>  "HR Manager",
                "address" => "Aden",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 2,
            ],
            [
                "user_id" => 1,
                "company_id" => 2,
                "title" => "HR Assistant",
                "slug" => "hr",
                "category_id" => 1,
                "position" =>  "HR Assistant",
                "address" => "Sana",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 3,
            ],
            [
                "user_id" => 1,
                "company_id" => 1,
                "title" => "Software Engineering",
                "slug" => "software_engineering",
                "category_id" => 2,
                "position" =>  "Programmer",
                "address" => "Aden",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 2,
            ],
            [
                "user_id" => 1,
                "company_id" => 2,
                "title" => "Web Development",
                "slug" => "software_engineering",
                "category_id" => 2,
                "position" =>  "Programmer",
                "address" => "Sanaa",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 3,
            ],
            [
                "user_id" => 1,
                "company_id" => 3,
                "title" => "Android Engineering",
                "slug" => "android_engineering",
                "category_id" => 2,
                "position" =>  "Programmer",
                "address" => "Taiz",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 3,
            ],
            [
                "user_id" => 1,
                "company_id" => 1,
                "title" => "HR Manager",
                "slug" => "hr",
                "category_id" => 1,
                "position" =>  "HR Manager",
                "address" => "Aden",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 2,
            ],
            [
                "user_id" => 1,
                "company_id" => 2,
                "title" => "HR Assistant",
                "slug" => "hr",
                "category_id" => 1,
                "position" =>  "HR Assistant",
                "address" => "Sana",
                "type" => "ant",
                "status" => "active",
                "last_date" => Carbon::now(),
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque dolore dolores fugit hic illo iste laudantium, magnam maiores minus nesciunt nobis officiis quae recusandae reprehenderit saepe ullam ut voluptate!",
                "job_type_id" => 2,
            ],
        ];

        foreach ($data as $items) {
            job::create($items);
        }
    }
}
