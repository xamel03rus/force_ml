<?php
/**
 * Created by Insane.
 */

namespace ForceML;


use function Sabre\Xml\Deserializer\keyValue;
use Sabre\Xml\Reader;
use Sabre\Xml\Service;

class ForceParser
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @param string $xml
     * @return array
     */
    public function parse($xml)
    {
        return $this->service->parse($xml);
    }

}