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
            'status' => 1,
            'email_verified_at' => '2023-01-05',
            'last_login' => date('Y-m-d'),
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $role2 = Role::create(['name' => 'Admin']);
        $user->assignRole($role);


//        DB::table('category_posts')->insert([
//           'name' => 'Geral',
//           'slug' => 'geral',
//            'status' => true
//        ]);
//
//         Post::factory(10)->create();

//        DB::table('instagram_posts')->insert([
//            'title' => 'Post 1',
//            'url' => 'https://www.instagram.com/p/Cydh2Fiu_9r/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
//            'status' => true
//        ]);
//
//        DB::table('instagram_posts')->insert([
//            'title' => 'Post 2',
//            'url' => 'https://www.instagram.com/p/Cx8ybmhu_NS/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
//            'status' => true
//        ]);
//
//        DB::table('instagram_posts')->insert([
//            'title' => 'Post 3',
//            'url' => 'https://www.instagram.com/p/CvUr9sBgDes/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
//            'status' => true
//        ]);
//
//        DB::table('instagram_posts')->insert([
//            'title' => 'Post 4',
//            'url' => 'https://www.instagram.com/p/CvKXbezAMbZ/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==',
//            'status' => true
//        ]);

        DB::table('ebooks')->insert([
            'title' => 'Como falar sobre suicídio?',
            'resume' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut comodo diam libero vitae erat. Nunc ut sem vitae risus tristique posuere.',
            'status' => false,
        ]);

        DB::table('ebooks')->insert([
            'title' => 'Um relacionamento saudável com minha ansiedade',
            'resume' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut comodo diam libero vitae erat. Nunc ut sem vitae risus tristique posuere.',
            'status' => true,
        ]);
    }
}
