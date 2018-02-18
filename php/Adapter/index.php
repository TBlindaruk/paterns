<?php
require_once __DIR__ . '/vendor/autoload.php';

use Pattern\BookInterface;
use Pattern\Kindle;
use Pattern\EbookAdapter;
use \Pattern\Nook;

/**
 * Class Person
 */
class Person
{
    /**
     * Read the book
     *
     * @param BookInterface $book
     */
    function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new EbookAdapter(new Kindle));
(new Person)->read(new EbookAdapter(new Nook()));