<?php

$text = <<<TEXT
это **выделенный**  текст, а это __курсивный__ текст 
а это  ~~зачеркнутый~~ текст 
TEXT;

$pattern = [
    "/\*\*(.*?)\*\*/s",
    "/__(.*?)__/s",
    "/~~(.*?)~~/s"
];

$replacement = [
    "<b>$1</b>",
    "<i>$1</i>",
    "<s>$1</s>"
];

echo preg_replace(
    $pattern,
    $replacement,
    $text
);