<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\Team
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @mixin \Eloquent
 */
class Team extends Model
{
    protected $fillable = ['name','user_id','is_active'];

    public function getUsers()
    {
       return $this->hasMany('App\User');
    }
}
