<?php

class Gist
{
    /**
     * @var File
     */
    private $file;
    
    /**
     * @var string
     */
    private $url;

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @var Profile
     */
    private $owner;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * Gist constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return Profile
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Profile $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}