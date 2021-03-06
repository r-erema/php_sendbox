<?php

namespace learning\Patterns\Proxy\Example1;

class Image
{

    /**
     * @var string
     */
    protected $fileName;

    /**
     * @var int
     */
    private $loadsCount = 0;

    /**
     * Images constructor.
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return bool|string
     */
    private function loadImage()
    {
        //image creation imitation
        $this->loadsCount++;
        return "Image {$this->fileName} created";
    }

    /**
     * @return bool|string
     */
    public function getImageContents()
    {
        return $this->loadImage();
    }

    /**
     * @return int
     */
    public function getLoadsCount(): int
    {
        return $this->loadsCount;
    }
}
