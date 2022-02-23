<?php

declare(strict_types=1);

namespace Meals\Domain\User\Permission;

use MyCLabs\Enum\Enum;

class Permission extends Enum
{
    public const VIEW_ACTIVE_POLLS = 'viewActivePolls';
    public const PARTICIPATION_IN_POLLS = 'participationInPolls';
}
