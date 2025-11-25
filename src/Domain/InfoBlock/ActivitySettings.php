<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class ActivitySettings
{
    public function __construct(
        public bool $active,
        public bool $indexElement,
        public bool $workflow
    ) {}
}
