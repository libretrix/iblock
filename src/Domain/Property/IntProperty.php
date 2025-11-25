<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\Property;

use Libretrix\Iblock\Model\RequirementsInterface;

class IntProperty implements PropertyInterface
{
    public function __construct(
        public RequirementsInterface $requirements,
    ) {}
}
