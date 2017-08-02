<?php

namespace cafe;

class Config
{

    /** @var  string */
    protected $cafeName;

    /**
     * Config_PDF constructor.
     * @param string $cafeName
     */
    public function __construct($cafeName)
    {
        $this->cafeName = $cafeName;
    }


    /**
     * @return string
     */
    public function getCafeName()
    {
        return $this->cafeName;
    }

    /**
     * @param string $cafeName
     * @return Config
     */
    public function setCafeName($cafeName)
    {
        $this->cafeName = $cafeName;
        return $this->cafeName;
    }


}
