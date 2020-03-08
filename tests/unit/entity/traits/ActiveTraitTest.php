<?php namespace entity\traits;

use Codeception\Test\Unit;
use HowToCodeWell\Entity\Example;
use UnitTester;

class ActiveTraitTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    public function testDefaults()
    {
        $entity = new Example();
        $this->assertFalse($entity->isActive());
    }

    public function testSetActive()
    {
        $entity = new Example();
        $entity->setActive(true);
        $this->assertTrue($entity->isActive());
    }

    protected function _before()
    {
    }

    // tests

    protected function _after()
    {
    }
}