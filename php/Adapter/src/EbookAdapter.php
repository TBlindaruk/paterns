<?php namespace Pattern;

/**
 * Class KindleAdapter
 *
 * @package Pattern
 */
class EbookAdapter implements BookInterface
{
    /**
     * @var EbookReaderInterface
     */
    protected $kindle;

    /**
     * EbookAdapter constructor.
     *
     * @param EbookReaderInterface $kindle
     */
    function __construct(EbookReaderInterface $kindle)
    {
        $this->kindle = $kindle;
    }

    function open()
    {
        return $this->kindle->turnOn();
    }

    function turnPage()
    {
        return $this->kindle->pressNextButton();
    }
}