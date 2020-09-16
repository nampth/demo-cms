<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 9/16/2020
 * Time: 2:57 PM
 */

namespace App\Models\Frontend;


use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;
}