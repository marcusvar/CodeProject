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
        $faker = Faker::create();
        // Retorna os user_ids
        $users = \CodeProject\Entities\User::all()->lists('id')->toArray();
        // Retorna os clients_ids
        $clients = \CodeProject\Entities\Client::all()->lists('id')->toArray();

        foreach(range(1,50) as $index){
            \CodeProject\Entities\Project::create(array(
                'owner_id' => $faker->randomElement($users),
                'client_id' => $faker->randomElement($clients),
                'name' => $faker->name,
                'description' => $faker->sentence,
                'progress' => $faker->randomNumber(4),
                'due_date' => $faker->date()
            ));
        }
    }
}
