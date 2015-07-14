<?php

use App\BeeUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        BeeUser::truncate();

        $this->call(BeeUserTableSeeder::class);
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
