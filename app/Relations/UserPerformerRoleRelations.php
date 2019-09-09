<?php

namespace App\Relations;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserPerformerRoleRelations extends BelongsToMany
{
    protected $pivotColumns = ['role_id', 'description'];

    public function newPivot(array $attributes = [], $exists = false)
    {
        $pivot = new PerformerWithRolePivot($attributes);

        return $pivot->setPivotKeys($this->foreignPivotKey, $this->relatedPivotKey);
    }

    public function get($columns = ['*'])
    {
        $users = parent::get($columns);


        $pivots = $users->map(function ($user) {
            return $user->pivot;
        })->load('role');

        return $users;
    }

}