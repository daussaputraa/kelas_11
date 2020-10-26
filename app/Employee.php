<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    // blacklist
    protected $guarded = ['id'];

    // whitelist
    protected $fillable = ['name', 'alamat', 'phone', 'email', 'position_id'];

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function inventory()
    {
        return $this->belongsToMany('App\Inventory')
        ->withPivot('description', 'created_at');
    }

}
