<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeProject\Entities\Project::truncate();
        factory(\CodeProject\Entities\Project::class, 10)->create();
    }
}
