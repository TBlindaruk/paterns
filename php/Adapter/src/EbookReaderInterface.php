<?php namespace Pattern;

/**
 * Interface EbookReaderInterface
 *
 * @package Pattern
 */
interface EbookReaderInterface
{
    /**
     * turn on the page on e-book
     */
    public function turnOn();

    /**
     * `Next` on the e-book
     */
    public function pressNextButton();
}