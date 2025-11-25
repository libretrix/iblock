<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

final readonly class MainSettings
{
    public function __construct(
        public CoreSettings $core,
        public ActivitySettings $activity,
        public UrlSettings $urls,
        public SortSettings $sort
    ) {}
}
