<?php

namespace oscarsalomon89\Cups\Model\Traits;

/**
 * Trait UriAware
 *
 * @package oscarsalomon89\Cups\Model\Traits
 */
trait UriAware
{

    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return UriAware
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }
}
