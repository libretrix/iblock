<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model;

interface RequirementsAwareInterface
{
    public RequirementsInterface $requirements {
        get;
    }
}
