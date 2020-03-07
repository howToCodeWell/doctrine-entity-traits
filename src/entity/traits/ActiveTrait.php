<?php
/**
 * Created by PhpStorm.
 * CourseRegistration: peterfisher
 * Date: 12/03/2018
 * Time: 07:42
 */

namespace HowToCodeWell\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait ActiveTrait
{
    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $active = false;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}