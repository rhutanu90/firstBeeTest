<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\BeeUser;

class BeeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        foreach(range(1, 30) as $index){
            BeeUser::create([
                'USERNAME' =>$faker->userName,
                'PASSWORD' =>$faker->password(6,15),
                'FIRST_NAME' => $faker->firstNameFemale,
                'LAST_NAME' =>$faker->lastName,
                'EMAIL' => $faker->email,
                'PHONE' => $faker->phoneNumber,
                'STATUS' => $faker->boolean(),
                'DELETED' => $faker->boolean(10)
            ]);
        }

    }
}
