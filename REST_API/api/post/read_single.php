<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    
    include_once '../../config/Database.php';
    include_once '../../models/Post.php';

    $database = new Database();
    $db = $database->connect();

    $post = new Post($db);

    $post->id_shape = isset($_GET['id']) ? $_GET['id'] : die();

    $post->read_single();

    $post_arr = array(
        'id_shape' => $post->id_shape,
        'size' => $post->size,
        'width' => $post->width,
        'length' => $post->length
    );

    print_r(json_encode($post_arr));
?>