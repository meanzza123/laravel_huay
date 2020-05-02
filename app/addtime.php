<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addtime extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addtimes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'tel', 'time'];

    
}
