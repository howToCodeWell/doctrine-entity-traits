<?php
/**
 * Created by PhpStorm.
 * CourseRegistration: peterfisher
 * Date: 12/03/2018
 * Time: 07:42
 */

namespace HowToCodeWell\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Exception;

/**
 * Trait TimestampableTrait
 * @ORM\HasLifecycleCallbacks()
 */
trait TimestampableTrait
{
    /**
     * @var DateTime|null
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    private $updatedDate;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $creationDate;

    /**
     * @return DateTime|null
     */
    public function getUpdatedDate(): ?DateTime
    {
        return $this->updatedDate;
    }

    /**
     * @param DateTime $updatedDate
     * @return self
     */
    public function setUpdatedDate(DateTime $updatedDate): self
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param DateTime $creationDate
     * @return self
     */
    public function setCreationDate(DateTime $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }


    /**
     * @ORM\PrePersist
     * @return self
     * @throws Exception
     */
    public function prePersist(): self
    {
        $this->setCreationDate(new DateTime());

        return $this;
    }

    /**
     * @ORM\PreUpdate()
     * @return self
     * @throws Exception
     */
    public function preUpdate(): self
    {
        $this->setUpdatedDate(new DateTime());

        return $this;
    }
}