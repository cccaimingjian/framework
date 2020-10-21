<?php

namespace Shopper\Framework\Models\User;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    /**
     * Determine if User is admin
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->name === config('shopper.system.users.admin_role');
    }
}
