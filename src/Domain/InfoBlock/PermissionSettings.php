<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class PermissionSettings
{
    /**
     * @param Permission[] $permissions
     */
    public function __construct(
        public array $permissions
    ) {}
}
