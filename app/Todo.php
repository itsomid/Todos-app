<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Todo
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $completed
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo query()
 * @mixin \Eloquent
 */
class Todo extends Model
{

}
