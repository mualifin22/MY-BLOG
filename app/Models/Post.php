<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => "Judul Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Muhammad Ibnu Mualifin",
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, magni qui. Voluptate voluptatibus quasi non itaque enim rem neque pariatur ipsa, commodi porro, nemo deleniti culpa aliquid quod nesciunt tempore quas error fugiat adipisci, dolorem officiis vitae eos iste tempora? Eligendi beatae ut, labore molestiae inventore vero doloribus libero quibusdam, asperiores ex consequuntur autem deleniti sunt aspernatur nemo expedita ipsum dignissimos aperiam magnam. Quo voluptatem dolore esse perferendis nostrum est illo unde cupiditate fugiat libero suscipit molestiae harum ea sint, pariatur tempora at consequuntur rem ipsa? Similique ipsa in, rem tenetur ipsum minima vero et iste, quam voluptas accusamus suscipit!",
        ],
        [
            'title' => "Judul Kedua",
            'slug' => "judul-post-kedua",
            'author' => "Inuma",
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque debitis ipsum voluptatum voluptas, at modi assumenda quae id nemo minima perspiciatis impedit illum blanditiis quisquam vel. Laudantium voluptatum quod dolor pariatur adipisci explicabo consequatur odit laboriosam nam minima! Ex, voluptas quos animi dolores dolor odio nostrum molestiae velit eius. Commodi quam debitis, fuga est nam ad. Temporibus corporis alias nam eum, dolor assumenda commodi iste ab. At rerum veritatis sed incidunt tempora earum facere quos eius saepe, recusandae officiis a quis consectetur fugit deserunt? Libero omnis odit dicta fugit esse?",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
