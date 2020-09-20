<?php
$url = 'http://localhost/PHP_REST_MYBLOG/api/post/read.php';

$ans = file_get_contents($url);

$decoded = json_decode($ans,true);



foreach($decoded as $data){
    echo $data->title;
}




?>