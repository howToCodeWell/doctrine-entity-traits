<?php
/**
 * Created by PhpStorm.
 * CourseRegistration: peterfisher
 * Date: 12/03/2018
 * Time: 07:42
 */

namespace HowToCodeWell\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

trait UuidTrait
{
    /**
     * @var UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @param UuidInterface $id
     * @return self
     */
    public function setId(UuidInterface $id): self
    {
        $this->id = $id;

        return $this;
    }
}