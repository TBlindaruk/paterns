<?php

namespace Pattern;

/**
 * Class Book
 *
 * @package Pattern
 */
class Book implements BookInterface
{
    public function open()
    {
        var_dump('Opening Page');
    }

    public function turnPage()
    {
        var_dump('Turning the page of paper book');
    }
}