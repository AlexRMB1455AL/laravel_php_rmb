<?php

namespace App\Http\Controllers;

use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;

use function PHPUnit\Framework\never;

class  PostController extends Controller
{
    public function index(): string
   {
       $posts = Post::all();
//       dd($posts);
////        $str = 'welcome Aleksandr!';
//       $post = Post::find(1);
//       dump($post->title);
//       dump($post->author);
//       dump($post->content);
//       dump($post->likes);
//       dump($post->comments);
//       dump($post->is_published);
//       dump($post->created_at);
//       dump($post->updated_at);
//       dump($post->uber);
//       dump($post->is_published);
//
//
//        return '';
//dd('end');
return view('posts', compact('posts'));
   }

}
