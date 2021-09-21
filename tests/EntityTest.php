<?php
/**
 * Created by Insane.
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Helpers\TestEntity;

class EntityTest extends TestCase
{
    public function testCreation()
    {
        $entity = new TestEntity();

        $entity->Ид = "dasdsdas-321332-dsaddsa-3213dssd";
        $entity->Наименование = 'Iphone 5s';

        $this->assertTrue($entity->validate());
    }

}