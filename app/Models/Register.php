<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // private static $dummy_user = [
    //     [
    //         "name" => "user 1",
    //         "slug" => "user-1",
    //         "email" => "user1@mail.com",
    //         "address" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit quasi enim natus sit deleniti quo necessitatibus, non asperiores modi eius soluta adipisci molestias eaque praesentium minima minus temporibus. Harum eaque, nemo vel magnam earum aspernatur est necessitatibus autem eius omnis, quod dolorem quibusdam! Ea sed dicta quaerat voluptatem rem harum?",
    //         "phone" => "088"
    //     ],
    //     [
    //         "name" => "user 1",
    //         "slug" => "user-1",
    //         "email" => "user1@mail.com",
    //         "address" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit quasi enim natus sit deleniti quo necessitatibus, non asperiores modi eius soluta adipisci molestias eaque praesentium minima minus temporibus. Harum eaque, nemo vel magnam earum aspernatur est necessitatibus autem eius omnis, quod dolorem quibusdam! Ea sed dicta quaerat voluptatem rem harum?",
    //         "phone" => "088"
    //     ]
    // ];

    // public static function all(){
    //     return collect(self::$dummy_user);
    // }

    // public static function find($slug){
    //     // $posts = self::$blog_posts;
    //     $posts = static::all(); //ambil dr func all
    //     $single_post = [];
    //             //cek post slug
    //         // foreach($posts as $post) {
    //         //     if($post["slug"] === $slug){
    //         //         $single_post = $post;
    //         //     }
    //         // }

    //     // return $single_post;
    //     return $posts->firstWhere('slug', $slug);
    // }
    
}
