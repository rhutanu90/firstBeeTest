<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\User;

class APIUSERSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = Faker::create();

        User::create([
            'email' => 'rareshutanu@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('raresetare'),
            'name' => 'rareshutanu'
        ]);

        User::create([
            'email' => 'test@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('test'),
            'name' => 'test'
        ]);

        foreach(range(1, 3) as $index){
            User::create([
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make($faker->password(6,7)),
                'name' => $faker->userName
            ]);
        }
    }
}
