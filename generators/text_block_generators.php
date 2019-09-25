<?php

function right_text_block_generate($h1, $h2, $p_bold, $p_data) {
    $output = '
        <div class="row left">
            <div class="col-6">
                <h1>' . "$h1" . '</h1>
                <div class="underline"></div>
                <h2>' . "$h2" . '</h2>
            </div>
            <div class="col-6">
                <p class="text-bold">' . "$p_bold" . '</p>
                <p>' . "$p_data" . '</p>
            </div>
        </div>
    ';
    return $output;
}

function left_text_block_generate($h1, $h2, $p_bold, $p_data) {
    $output = '
        <div class=\"row left">
            <div class="col-6">
                <p class="text-bold">' . "$p_bold" . '</p>
                <p>' . "$p_data" . '</p>
            </div>
            <div class="col-6">
                <h1>' . "$h1" . '</h1>
                <div class="underline"></div>
                <h2>' . "$h2" . '</h2>
            </div>
        </div>
    ';
    return $output;
}