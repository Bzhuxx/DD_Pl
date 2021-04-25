<?php
     $x = implode(" | ", $_POST);  
    $file = fopen("text.txt", "a");
     fwrite($file, $x);
     fclose($file);
     header('Location: Spasibo.html');
     exit;