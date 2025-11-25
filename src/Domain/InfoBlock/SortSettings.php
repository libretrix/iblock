<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class SortSettings
{
    public function __construct(
        public int $value
    ) {}
}
