<?php
/**
 * Created by PhpStorm.
 * CourseRegistration: peterfisher
 * Date: 12/03/2018
 * Time: 07:42
 */

namespace HowToCodeWell\Entity;

use DateTime;
use HowToCodeWell\Entity\Traits;
use Ramsey\Uuid\Uuid;

class Example
{
    use Traits\ActiveTrait;
    use Traits\TimestampableTrait;
    use Traits\UuidTrait;

    public function __construct()
    {
        $this->setCreationDate(new DateTime());
        $this->setId(Uuid::uuid4());
    }
}