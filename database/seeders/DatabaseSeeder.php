<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->insert([[
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'ign' => 'admin',
            'birthday' => date_date_set(date_create(), 1999, 1, 1),
            'bio' => '...',
            'isAdmin' => true,
            'remember_token' => Str::random(10),
        ],[
            'name' => 'test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
            'ign' => 'test',
            'birthday' => date_date_set(date_create(), 1999, 1, 1),
            'bio' => '...',
            'isAdmin' => false,
            'remember_token' => Str::random(10),
        ]]);

        DB::table('news')->insert([[
            'title'=>"First post",
            'text'=>"That's right, we have a news page now.",
        ],[
            'title'=>"First update",
            'text'=>"We added more placeholder news.",
        ],[
            'title'=>"Lorem ipsum",
            'text'=>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...",
        ]]);

        DB::table('faq')->insert([[
            'question'=>"Wie maakte deze website?",
            'answer'=>"Yoni Celen",
        ],[
            'question'=>"Voor welk vak maakte hij deze website",
            'answer'=>"Web Integration",
        ]]);

        DB::table('forum')->insert([[
            'title'=>"First post",
            'text'=>"That's right, we have a rudimentary community forum page now.",
        ],[
            'title'=>"Second post",
            'text'=>"Look, a post!",
        ],[
            'title'=>"Lorem ipsum",
            'text'=>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...",
        ]]);
    }
}
