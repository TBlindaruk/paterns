<?php

namespace Pattern;

/**
 * Class Kindle
 *
 * @package Pattern
 */
class Nook implements EbookReaderInterface
{
    /**
     * turn on the page on Kindle e-book
     */
    public function turnOn()
    {
        var_dump('Turning on Nook');
    }

    /**
     * `Next` on the Kindle e-book
     */
    public function pressNextButton()
    {
        var_dump('Pressed the next page button on Nook');
    }
}