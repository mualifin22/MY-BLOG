<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
                // User::factory()->create([
                //     'name' => 'Test User',
                //     'email' => 'test@example.com',
                // ]);

                User::create([
                    'name' => 'Inuma',
                    'username' => 'inuma',
                    'email' => 'inuma@gmail.com',
                    'password' => bcrypt('password')
                ]);

                // User::create([
                //     'name' => 'Mualifin',
                //     'email' => 'mualifin@example.com',
                //     'password' => 'bcrypt(12345)',
                // ]);

        User::factory(10)->create();

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);

        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'cyber-security',
        ]);

        Category::create([
            'name' => 'Finance',
            'slug' => 'finance',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, quod?',
        //     'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam, sed ad aut corrupti porro suscipit eligendi assumenda ex, nesciunt veniam ipsum. Tenetur, repellat qui optio incidunt autem ex magnam corporis praesentium? Ex quo, omnis exercitationem id qui eligendi tempora quis impedit. Necessitatibus, aperiam sapiente. Animi voluptatibus temporibus dolore fugit obcaecati id ab sint, ipsum distinctio totam, enim, facilis deserunt. Veniam iure similique tempora qui molestiae quidem exercitationem cupiditate? Error quod officia aspernatur, reprehenderit, tempora assumenda, corrupti quas eius harum non aliquid unde quisquam? Consequuntur reprehenderit temporibus aspernatur? Accusamus, aliquam? Odit blanditiis beatae deserunt eveniet earum eum id laudantium repellendus, inventore sint dicta dolorem ullam? Earum ut nihil rem pariatur!',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, quod?',
        //     'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam, sed ad aut corrupti porro suscipit eligendi assumenda ex, nesciunt veniam ipsum. Tenetur, repellat qui optio incidunt autem ex magnam corporis praesentium? Ex quo, omnis exercitationem id qui eligendi tempora quis impedit. Necessitatibus, aperiam sapiente. Animi voluptatibus temporibus dolore fugit obcaecati id ab sint, ipsum distinctio totam, enim, facilis deserunt. Veniam iure similique tempora qui molestiae quidem exercitationem cupiditate? Error quod officia aspernatur, reprehenderit, tempora assumenda, corrupti quas eius harum non aliquid unde quisquam? Consequuntur reprehenderit temporibus aspernatur? Accusamus, aliquam? Odit blanditiis beatae deserunt eveniet earum eum id laudantium repellendus, inventore sint dicta dolorem ullam? Earum ut nihil rem pariatur!',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, quod?',
        //     'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam, sed ad aut corrupti porro suscipit eligendi assumenda ex, nesciunt veniam ipsum. Tenetur, repellat qui optio incidunt autem ex magnam corporis praesentium? Ex quo, omnis exercitationem id qui eligendi tempora quis impedit. Necessitatibus, aperiam sapiente. Animi voluptatibus temporibus dolore fugit obcaecati id ab sint, ipsum distinctio totam, enim, facilis deserunt. Veniam iure similique tempora qui molestiae quidem exercitationem cupiditate? Error quod officia aspernatur, reprehenderit, tempora assumenda, corrupti quas eius harum non aliquid unde quisquam? Consequuntur reprehenderit temporibus aspernatur? Accusamus, aliquam? Odit blanditiis beatae deserunt eveniet earum eum id laudantium repellendus, inventore sint dicta dolorem ullam? Earum ut nihil rem pariatur!',
        //     'user_id' => 2,
        //     'category_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, quod?',
        //     'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam, sed ad aut corrupti porro suscipit eligendi assumenda ex, nesciunt veniam ipsum. Tenetur, repellat qui optio incidunt autem ex magnam corporis praesentium? Ex quo, omnis exercitationem id qui eligendi tempora quis impedit. Necessitatibus, aperiam sapiente. Animi voluptatibus temporibus dolore fugit obcaecati id ab sint, ipsum distinctio totam, enim, facilis deserunt. Veniam iure similique tempora qui molestiae quidem exercitationem cupiditate? Error quod officia aspernatur, reprehenderit, tempora assumenda, corrupti quas eius harum non aliquid unde quisquam? Consequuntur reprehenderit temporibus aspernatur? Accusamus, aliquam? Odit blanditiis beatae deserunt eveniet earum eum id laudantium repellendus, inventore sint dicta dolorem ullam? Earum ut nihil rem pariatur!',
        //     'user_id' => 1,
        //     'category_id' => 2,
        // ]);
    }
}
