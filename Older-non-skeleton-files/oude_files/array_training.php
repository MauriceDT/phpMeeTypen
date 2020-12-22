<?php


class Post
{
    public $title;

    public $author;

    public $published;


    public function __construct($title, $author, $published)
    {

        $this->$title = $title;
        $this->$author = $author;
        $this->$published = $published;
    }
}

$posts = [
    new Post('My First Post', 'JW', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'MDT', true),
    new Post('My Fourth Post', 'TR', false)
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return  $post->published;
// });

// var_dump($posts);

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);
