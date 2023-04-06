<?php 

function drawTags($tag, $style, $content, $nr) {

    for ($i = 0; $i <= $nr; $i++) {
        echo "<$tag style='" . $style . "'> $content </$tag>";
    }

}

drawTags("span",
    "border: 1px solid red; background-color: yellow; color: red; margin: 4px; padding: 4px",
    "Salut!",
    2);

?>