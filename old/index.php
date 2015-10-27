<?php
require_once('vendor/autoload.php');
use Models\Blog, Models\Post;

$blog = new Blog();
$dadosBlog = $blog->getBlog();
$post = new Post();
$textos = $post->getPosts($dadosBlog->id_blog);

require_once('app/Views/inicial.php');