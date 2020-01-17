<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cat
 * @package App\Models
 */
class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
