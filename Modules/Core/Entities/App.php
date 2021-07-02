<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Core\Entities\App
 *
 * @method static \Illuminate\Database\Eloquent\Builder|App newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App query()
 * @mixin \Eloquent
 */
class App extends Model
{
    protected $fillable = ['slug','name','description'];

}
