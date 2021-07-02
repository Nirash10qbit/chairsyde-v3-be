<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\SubTeamApp
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeamApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeamApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubTeamApp query()
 * @mixin \Eloquent
 */
class SubTeamApp extends Model
{
    protected $fillable = ['app_id','sub_team_id','addon_data','is_active'];

    public function getApps()
    {
        return $this->hasMany(App::class);
    }

    public function getTeams()
    {
        return $this->hasMany(Team::class);
    }
}
