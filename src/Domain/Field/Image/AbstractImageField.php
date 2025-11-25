<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\Field\Image;

use Libretrix\Iblock\Model\Field\FieldInterface;
use Libretrix\Iblock\Model\Requirements;

abstract readonly class AbstractImageField implements FieldInterface
{
    public function __construct(
        public Requirements $requirements,
        public Size $size,
        public Quality $quality,
        public ?TextWatermark $textWatermark = null,
        public ?ImageWatermark $watermark = null,
        public bool $ignoreErrors = false,
    ) {}
}
