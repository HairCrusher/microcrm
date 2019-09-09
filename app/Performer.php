<?php

namespace App;

use App\Relations\PerformerRoleRelations;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $fillable = ['user_id', 'name', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admins()
    {
        return $this->belongsToMany(User::class, 'user_performer');
    }

    public function moderators()
    {
        return $this->hasManyDeep(
            User::class,
            [Event::class, 'user_event']
        );
    }

    public function join(User $user, UserRole $role)
    {
        $this->users()->attach($user, ['role_id' => $role->id]);
    }

    public function allUser($userId)
    {
        return $this::query()
            ->leftJoin('user_performer', 'performers.user_id', '=', 'user_performer.user_id')
            ->leftJoin('user_event', 'performers.user_id', '=', 'user_event.user_id')
            ->where($this->getTable().'.user_id', $userId)
            ->select('performers.*', 'user_performer.user_id as admin', 'user_event.user_id as moder');

    }
}
