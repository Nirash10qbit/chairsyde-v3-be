<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\TeamApp
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TeamApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamApp query()
 * @mixin \Eloquent
 */
class TeamApp extends Model
{
    protected $fillable = ['app_id','team_id','addon_data','is_active'];

    public function getApps()
    {
       return $this->hasMany(App::class);
    }
    public function getTeams()
    {
        return $this->hasMany(Team::class);
    }
}
