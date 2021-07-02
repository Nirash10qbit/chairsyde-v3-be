<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\SubTeamMember
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeamMember query()
 * @mixin \Eloquent
 */
class SubTeamMember extends Model
{
    protected $fillable = ['user_id','sub_team_id','role','is_active'];

    public function getUsers()
    {
        return $this->hasMany(User::class);
    }

    public function getSubteams()
    {
        return $this->hasMany(SubTeam::class);
    }
}
