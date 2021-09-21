<?php
/**
 * Created by Insane.
 */

namespace Tests;


use ForceML\ForceProvider;
use PHPUnit\Framework\TestCase;

class ForceProviderTest extends TestCase
{

    public function testParse()
    {
        $provider = new ForceProvider();

        $provider->parse(file_get_contents(realpath(__DIR__.'/files/test.xml')));
    }

}