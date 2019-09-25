<?php

function right_yellow_image_text_block($text, $image) {
    $output = "
<div class=\"row yellow-image-block right-yellow-image-block\">
    <div class=\"col-6\">
        <div class=\"text\">
            ";

for($i = 0; $i < sizeof($text); ++$i) {
    $output .= $text[$i];
}

$output .=
    "
        </div>
    </div>
    <div class=\"col-6\">
        <div class=\"row\">
            <div class=\"yellow-square-image\">
                <img src=\"img/voice-girl.png\" alt=\"\">
            </div>
        </div>
    </div>
</div>
    ";
    return $output;
}

function leat_yellow_image_text_block($text, $image) {
    $output = "
<div class=\"row yellow-image-block left-yellow-image-block\">
    <div class=\"col-6\">
        <div class=\"row\">
            <div class=\"yellow-square-image\">
                <img src=\"img/voice-girl.png\" alt=\"\">
            </div>
        </div>
    </div>
    <div class=\"col-6\">
        <div class=\"text\">
            ";

for($i = 0; $i < sizeof($text); ++$i) {
    $output .= "$text[i]";
}

$output .=
    "
        </div>
    </div>
</div>
    ";
    return $output;
}
