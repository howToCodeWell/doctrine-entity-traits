<?php namespace entity\traits;

use HowToCodeWell\Entity\Example;
use Ramsey\Uuid\Uuid;

class UuidTraitTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testDefaults()
    {
        $entity = new Example();
        $this->assertTrue(Uuid::isValid($entity->getId()));
    }

    public function testSetId()
    {
        $entity = new Example();
        $entity->setId(Uuid::uuid4());
        $this->assertTrue(Uuid::isValid($entity->getId()));
    }
}