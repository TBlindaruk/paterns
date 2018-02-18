<?php

namespace Pattern;

/**
 * Interface BookInterface
 *
 * @package Pattern
 */
interface BookInterface
{
    /**
     * Open the page
     */
    public function open();

    /**
     * turn the page
     */
    public function turnPage();
}