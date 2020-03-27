<?php
    for ($i = 0; $i < 5; $i++) {
        $response[] = rand(10,100);
    }  

    echo json_encode($response);
?>