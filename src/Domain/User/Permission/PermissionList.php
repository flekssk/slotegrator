<?php

declare(strict_types=1);

namespace Meals\Domain\User\Permission;

use Assert\Assertion;

class PermissionList
{
    /**
     * @var Permission[]
     */
    private array $permissions;

    /**
     * @param Permission[] $permissions
     */
    public function __construct(Permission ...$permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return Permission[]
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function hasPermission(Permission $needle): bool
    {
        return in_array($needle, $this->getPermissions());
    }
}
