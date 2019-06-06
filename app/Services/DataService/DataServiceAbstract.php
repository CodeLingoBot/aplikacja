<?php

namespace App\Services\DataService;


abstract class DataServiceAbstract implements DataServiceInterface
{

    /** @var string */
    protected $url;

    /**
     * DataServiceAbstract constructor.
     * @param string $url
     */
    public function __construct()
    {
        $this->url = $this->setUrl();
    }

    /**
     * Set URL
     * @return string
     */
    abstract public function setUrl(): string;

    /*
     * Return array of parsed JSON
     */
    public function getAll()
    {
       return $this->jsonToArray($this->applyEncode($this->download()));
    }

    /**
     * Download JSON
     * @return false|string
     */
    protected function download()
    {
        return file_get_contents($this->url);
    }

    protected function applyEncode($data)
    {
        return utf8_encode($data);
    }

    protected function jsonToArray($data)
    {
        return json_decode($data, true);
    }

}
