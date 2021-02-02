<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Applied::class, 10)->create();
        factory(\App\Article::class, 10)->create();
        factory(\App\Cicle::class, 10)->create();
        factory(\App\Offer::class, 10)->create();
        factory(\App\Requirement::class, 10)->create();
        factory(\App\User::class)->create(['email' => 'admin@damin.com', 'password'=>bcrypt('123456'), 'type'=>'ad']);

    }
}
