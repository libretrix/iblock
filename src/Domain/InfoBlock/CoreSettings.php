<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class CoreSettings
{
    public function __construct(
        public string $typeId,
        public string $code,
        public int $version,
        public string $name
    ) {}
}
