<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['user_id', 'service_id', 'name', 'slug', 'poster', 'members_count'];

}
