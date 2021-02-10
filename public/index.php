<?php

use Hillel\Model\Category;
use Hillel\Model\Post;
use Hillel\Model\Tag;

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

//for ($i = 0; $i < 6; $i++) {
//    $category = new Category();
//    $category->title = 'Category  №' . $i;
//    $category->slug = 'Category  №' . $i;
//    $category->save();
//}

//$category = Category::find(4);
////$category->title = 'new category';
////$category->update();
//$category->delete();
//
//for ($i = 1; $i <= 10; $i++) {
//    $post = new Post();
//    $post->title = 'title №' . rand(1, 100);
//    $post->slug = 'slug-' . rand(1, 100);
//    $post->body = 'body' . rand(1, 100);
//    $category = Category::all()->random();
//    $category->posts()->save($post);
//}
$post = Post::find(1);
$post->title = 'Another';
$category = Category::all()->random();
$category->posts()->update($post);

//
//for ($i = 1; $i <= 10; $i++) {
//    $tag = new Tag();
//    $tag->name = 'name' . rand(1, 100);
//    $tag->save();
//}
//$tags = Tag::all();
//
//foreach ($tags as $tag) {
//    for ($i = 1; $i < 4; $i++) {
//        $tag->posts()->attach(Post::all()->random());
//    }
//}


