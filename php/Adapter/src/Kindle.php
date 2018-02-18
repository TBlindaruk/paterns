<?php

namespace Pattern;

/**
 * Class Kindle
 *
 * @package Pattern
 */
class Kindle implements EbookReaderInterface
{
    /**
     * turn on the page on Kindle e-book
     */
    public function turnOn()
    {
        var_dump('Turning on kindle');
    }

    /**
     * `Next` on the Kindle e-book
     */
    public function pressNextButton()
    {
        var_dump('Pressed the next page button on kindle');
    }
}