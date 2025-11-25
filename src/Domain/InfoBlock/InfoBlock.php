<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

use Libretrix\Iblock\Model\Field\FieldInterface;
use Libretrix\Iblock\Model\Property\PropertyInterface;

final readonly class InfoBlock
{
    /**
     * @param FieldInterface[]    $fields,
     * @param PropertyInterface[] $properties,
     */
    public function __construct(
        public MainSettings $main,
        public PermissionSettings $permission,
        public InterfaceTexts $interfaceTexts,
        public array $fields,
        public array $properties,
    ) {}
}
