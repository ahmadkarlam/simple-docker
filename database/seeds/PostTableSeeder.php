<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $total = 100;
        $this->command->info("create ${total} post...");
        factory(\App\Post::class, $total)->create();
        $this->command->info("success");
    }
}
