<?php

namespace App\Relations;


use App\UserRole;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserWithRolePivot extends Pivot
{

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }
}