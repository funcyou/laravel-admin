<?php
/**
 * User: zhanxianguo
 * Date: 2018/12/7
 * Time: 1:18 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Base
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base query()
 * @mixin \Eloquent
 */
class Base extends Model
{
    protected $guarded = ['id'];
}