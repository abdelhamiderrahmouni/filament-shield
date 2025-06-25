<?php

declare(strict_types=1);

namespace AbdelhamidErrahmouni\FilamentShield\Contracts;

interface HasShieldPermissions
{
    public static function getPermissionPrefixes(): array;
}
