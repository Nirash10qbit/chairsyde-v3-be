<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\TeamMember
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember query()
 * @mixin \Eloquent
 */
class TeamMember extends Model
{
    protected $fillable = ['user_id','team_id','role','is_active'];

    public function getTeams()
    {
        return $this->hasMany(Team::class);
    }

    public function getUsers()
    {
        return $this->hasMany(User::class);
    }
}
