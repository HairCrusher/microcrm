<?php

namespace App;

use App\Relations\PerformerRoleRelations;
use App\Relations\UserPerformerRoleRelations;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Facades\JWTAuth;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $hidden = ['access_token'];

    protected $fillable = ['first_name', 'last_name', 'vk_id', 'vk_name', 'avatar', 'access_token', 'last_visit'];


    public function current()
    {
        return JWTAuth::parseToken()->authenticate();
    }

    public function performers()
    {
        return $this->hasMany(Performer::class)->with('user', 'admins');
//        return new UserPerformerRoleRelations(
//            (new Performer())->newQuery(),
//            $this,
//            'performers_roles',
//            'user_id',
//            'performer_id',
//            'id',
//            'id'
//        );
    }

    public function adminPerformers()
    {
        return $this->belongsToMany(Performer::class, 'user_performer')->with('user', 'admins');
    }

    public function events()
    {
        return $this->hasManyThrough(Event::class, Performer::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public function scopeVKID($query, $id)
    {
        return $query->where('vk_id', $id);
    }

    public function scopeVKName($query, $name)
    {
        return $query->where('vk_name', $name);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
