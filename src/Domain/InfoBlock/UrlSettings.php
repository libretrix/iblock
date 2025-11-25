<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class UrlSettings
{
    public function __construct(
        public string $listPageUrl,
        public string $detailPageUrl
    ) {}
}
