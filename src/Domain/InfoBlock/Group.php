<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class Group
{
    public function __construct(
        public int $index,
        public string $indexElement,
    ) {}
}
