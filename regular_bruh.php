<?php

function regular_bruh($comments) {
    $regularOchka = '/(https*:\/\/)?(www.)?([a-zA-Z0-9]+\.[a-zA-Z0-9]+)(\/[a-zA-Z0-9-._~:\/?#\[\]@!$&\'()*+,;=]*)*/u';
    foreach ($comments as $comment) {
        $comment['text'] = preg_replace($regularOchka,"<a class='comment_text_href' href='$1$2$3$4'>$1$2$3$4; $3</a>", $comment['text']);
        $res[] = $comment;
    }
    return $res;
}