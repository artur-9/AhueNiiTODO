<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Notes;

class Status extends Model
{
    protected $guarded = [];

    public function notes(){
        return $this->hasMany(Notes::class, 'status_id', 'id');
    }
}
