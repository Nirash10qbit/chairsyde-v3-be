<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\SubTeam
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeam query()
 * @mixin \Eloquent
 */
class SubTeam extends Model
{
    protected $fillable = ['name','team_id','user_id','is_active'];

    public function getTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function getUser()
    {
        return $this->hasMany(User::class);
    }
}
