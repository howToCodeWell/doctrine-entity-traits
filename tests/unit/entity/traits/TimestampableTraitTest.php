<?php namespace entity\traits;

use Codeception\Test\Unit;
use DateTime;
use HowToCodeWell\Entity\Example;
use UnitTester;

class TimestampableTraitTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    public function testDefaults()
    {
        $entity = new Example();
        $this->assertNull($entity->getUpdatedDate());
        $this->assertInstanceOf(DateTime::class, $entity->getCreationDate());
    }

    public function testSetCreatedDate()
    {
        $entity = new Example();
        $date = new DateTime();
        $entity->setCreationDate($date);
        $this->assertSame($date, $entity->getCreationDate());
    }

    public function testSetUpdatedDate()
    {
        $entity = new Example();
        $date = new DateTime();
        $entity->setUpdatedDate($date);
        $this->assertSame($date, $entity->getUpdatedDate());
    }

    protected function _before()
    {
    }

    protected function _after()
    {
    }
}