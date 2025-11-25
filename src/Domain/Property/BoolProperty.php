<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\Property;

use Libretrix\Iblock\Model\RequirementsInterface;

final readonly class BoolProperty implements PropertyInterface
{
    public function __construct(
        public RequirementsInterface $requirements,
    ) {}
}
