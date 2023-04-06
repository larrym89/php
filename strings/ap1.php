<?php

$sir = 'loremp Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit omnis vel eos consequatur ipsam suscipit dicta! At eligendi rem voluptatem necessitatibus autem deserunt aperiam perferendis aliquid similique aliquam, libero facere?';
echo "<pre>";
echo strlen($sir);

print_r(str_word_count($sir));

$sql = "SELECT first_name , last_name FROM users WHERE first_name=$first_name";



echo $sql;