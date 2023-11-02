<?php

namespace Database\Seeders;

use App\Models\Admin\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Root',
            'email' => 'root@root.com',
            'password' => Hash::make('123123'),
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $user->assignRole($role);


        DB::table('category_posts')->insert([
           'name' => 'Geral',
           'slug' => 'geral',
            'status' => true
        ]);

         Post::factory(10)->create();


        DB::table('instagram_posts')->insert([
            'title' => 'Post 1',
            'url' => 'https://www.instagram.com/p/Cydh2Fiu_9r/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
            'status' => true
        ]);

        DB::table('instagram_posts')->insert([
            'title' => 'Post 2',
            'url' => 'https://www.instagram.com/p/Cx8ybmhu_NS/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
            'status' => true
        ]);

        DB::table('instagram_posts')->insert([
            'title' => 'Post 3',
            'url' => 'https://www.instagram.com/p/CvUr9sBgDes/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
            'status' => true
        ]);

        DB::table('instagram_posts')->insert([
            'title' => 'Post 4',
            'url' => 'https://www.instagram.com/p/CvKXbezAMbZ/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
            'status' => true
        ]);
    }
}
