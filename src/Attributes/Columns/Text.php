<?php

namespace Aldeebhasan\Emigrate\Attributes\Columns;

use Aldeebhasan\Emigrate\Enums\ColumnTypeEnum;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
class Text extends Column
{
    protected ColumnTypeEnum $type = ColumnTypeEnum::TEXT;
}
