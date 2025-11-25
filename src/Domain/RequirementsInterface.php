<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model;

interface RequirementsInterface
{
    public string $code {
        get;
    }

    public bool $isRequired {
        get;
    }
}
