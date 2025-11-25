<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model;

final readonly class Requirements implements RequirementsInterface
{
    public function __construct(
        public string $code,
        public bool $isRequired = false,
    ) {}
}
