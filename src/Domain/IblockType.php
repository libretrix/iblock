<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Domain;

final readonly class IblockType
{
    public function __construct(
        public string $id = '',
        public string $code = '',
        public string $name = ''
    ) {
    }
}