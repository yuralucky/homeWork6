<?php

use Hillel\Model\Category;
use Hillel\Model\Post;
use Hillel\Model\Tag;

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

//for ($i = 0; $i < 6; $i++) {
//    $category = new Category();
//    $category->title = 'Category  №' . $i;
//    $category->slug = 'Category_' . $i;
//    $category->save();
//}

//$category = Category::all()->random();
//$category->title = 'new category';
//$category->slug = 'new_slug';
//$category->update();
//$category->delete();
//$categoriesIds = Category::all()->pluck('id')->toArray();
//var_dump($categoriesIds[array_rand($categoriesIds)]);
//for ($i = 1; $i <= 10; $i++) {
//    $post = new Post();
//    $post->title = 'title №' . rand(1, 100);
//    $post->slug = 'slug-' . rand(1, 100);
//    $post->body = 'body' . rand(1, 100);
//    $post->category_id = $categoriesIds[array_rand($categoriesIds)];
//    $post->save();
//}
//$post = Post::all()->random();
//$post->title = 'new';
//$category = Category::all()->random();
//$post->category_id=$category->id;
//$post->update();

//for ($i = 1; $i <= 10; $i++) {
//    $tag = new Tag();
//    $tag->title = 'title' . rand(1, 100);
//    $tag->slug = 'slug' . rand(1, 100);
//    $tag->save();
//}
//$tags = Tag::all();
//$arrIds = Post::all()->pluck('id')->toArray();
//foreach ($tags as $tag) {
//    for ($i = 1; $i < 4; $i++) {
//        $tag->posts()->attach($arrIds[array_rand($arrIds)]);
//    }
//}


