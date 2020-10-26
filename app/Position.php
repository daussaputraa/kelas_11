<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use SoftDeletes;

    // blacklist
    protected $guarded = ['id'];

    // whitelist
    protected $fillable = ['name', 'department_id'];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
