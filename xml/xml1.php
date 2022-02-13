<?php

declare(strict_types=1); ?>

<body>
    <?php
    $dom = new DOMDocument('1.0', 'UTF-8');
    $books = $dom->appendChild($dom->createElement('books'));

    $book = $books->appendChild($dom->createElement('book'));
    $book->setAttribute('id', '1001');
    $book->appendChild($dom->createElement('title', '斜陽'));
    $book->appendChild($dom->createElement('author', '太宰治'));

    $dom->formatOutput = true;

    echo htmlspecialchars($dom->saveXml(), ENT_QUOTES);
    ?>
</body>
