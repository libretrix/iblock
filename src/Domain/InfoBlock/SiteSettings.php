<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class SiteSettings
{
    /**
     * @param array<string> $siteIds
     */
    public function __construct(
        public array $siteIds
    ) {}
}
