<?php
/**
 * Created by Insane.
 */

namespace ForceML;


use Sabre\Xml\Service;

class ForceProvider
{
    use InitService;

    public $rewrites;
    public $data;

    public function __construct($rewrites = [])
    {
        $this->rewrites = $rewrites;
    }

    public function checkauth()
    {
        return "success\ncookie_name\ncookie_value\nsessid=111";
    }

    public function init()
    {
        return "zip=no\nfile_limit=50000000\nsessid=111\nversion=2.08";
    }

    public function success()
    {
        return "success";
    }

    public function failure()
    {
        return "failure";
    }

    /**
     * @param string $path
     */
    public function upload($path,$content)
    {
        file_put_contents($path,$content);
    }

    public function parse($xml)
    {
        $parser = new ForceParser($this->createService($this->rewrites));
        $map = new ForceMap();

        $this->data = $map->map($parser->parse($xml));
    }

}