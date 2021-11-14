<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Formation;
use App\Models\User;
use Database\Factories\PostFactory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['email' =>'admin', "admin@admin.com",'role'=>'admin','password'=>'$2y$10$kAE7xYYjsR4t7aB8V34Mduy.Ri4RTJf9EiPO1MpZw3FXQBY9x7qMW']);
    }
}
