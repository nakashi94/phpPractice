<?php

declare(strict_types=1);

$novels =
    [
        [
            "title" => "\u659c\u967d",
            "author" => "\u592a\u5bb0\u6cbb"
        ],
        [
            'title' => '斜陽',
            'author' => '太宰治',
        ],
        [
            'title' => 'The Catcher in the Rye',
            'author' => 'Jerome David Salinger',
        ]
    ];

$encoded = json_encode($novels);
echo $encoded;
