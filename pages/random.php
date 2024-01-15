<?php
    function randomId(){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890-_';
        $length = 11;
        $random_id = '';

        for($i = 0; $i < $length; $i++){
            $random_id = $characters[rand(0, strlen($characters) - 1)]; 
        }
        return $random_id;
    }
    $generated_id = randomId();
    echo "The generated id is " . $generated_id;



?>