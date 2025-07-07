<?php

namespace App\Http\Controllers;

use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;

use function PHPUnit\Framework\never;

class  PostController extends Controller
{
    public function index(): string
   {
//        $str = 'welcome Aleksandr!';
//       $post = Post::find(1); //1 id
//        $posts = Post::all();
        $posts =Post::where('is_published', true)->get();
//        $post =Post::where('is_published', true)->first();

        foreach ($posts as $post) {
            dump($post->title);
        }
//        dd($posts);
         dd('end');
///      dump($post->title);
//       dump($post->author);
//       dump($post->content);
//       dump($post->likes);
//       dump($post->comments);
//       dump($post->is_published);
//       dump($post->created_at);
//       dump($post->updated_at);
//       dump($post->uber);
//       dump($post->is_published);


        return '';
   }
   public function create(): string
   {
     $postsArr = [
         [
         'title' => 'My first post',
         'content' => 'This is the content of my first post.',
         'likes' => 10,
         'is_published' => true,
         'author' => 'Aleksandr',
         'uber' => 'Uber content',
         ],
        [
         'title' => 'My second post',
         'content' => 'This is the content of my second post.',
         'likes' => 20,
         'is_published' => true,
         'author' => 'Aleksandr',
         'uber' => 'Uber content',
        ],
     ];
     Post::create([
         'title' => 'My first post',
         'content' => 'This is the content of my first post.',
         'likes' => 10,
         'is_published' => true,
         'author' => 'Aleksandr',
         'uber' => 'Uber content',
     ]);

     foreach ($postsArr as $pitem) {
         dd($pitem);
            Post::create($pitem);
     }

     dd('create');
   }
    public function update(): string
    {
         $post = Post::find(6);
         $post->update([
             'title' => 'My 123 updated post',
             'content' => 'This 123 updated',
             'likes' => 15,
             'is_published' => false,
             'author' => 'Aleksandr Updated',
             'uber' => 'Updated Uber content',

         ]);


         dd('update');
    }
    // удаление данных из базы данных и восстановление
    #[NoReturn] public function delete(): string
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
//        $post->delete();
        dd('delete page');
    }

}
