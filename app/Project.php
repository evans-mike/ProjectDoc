<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    protected $fillable = ['status'];
    protected $fillable = ['owner_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
