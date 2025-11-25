<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\Field\Image;

final class Quality
{
    public function __construct(
        public string $method = 'resample',
        public int $compression = 95
    ) {}
}
