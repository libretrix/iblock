<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class Permission
{
    public function __construct(
        public UserGroupEnum $group,
        public AccessRightEnum $accessRight,
    ) {}
}
