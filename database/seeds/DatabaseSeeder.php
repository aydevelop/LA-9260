<?php

use App\Post;
use App\User;
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
        DB::table('users')->delete();
        DB::table('posts')->delete();

        factory(Post::class, 10)->create();

        User::create([
            'name' => 'root',
            'email' => 'root@mail.com',
            'password' => bcrypt('root')
        ]);
    }
}
