<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class InterfaceTexts
{
    public function __construct(
        public string $add,
        public string $delete,
        public string $edit,
        public string $name,
        public string $names
    ) {}
}
