<?php

for ($i = 0; $i <= rand(0,10); $i++) {
    $response[] = rand(0,10);
}  

echo json_encode($response);