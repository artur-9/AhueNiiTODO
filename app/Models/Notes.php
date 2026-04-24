<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='notes';

    protected $guarded = [];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
