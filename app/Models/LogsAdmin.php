<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogsAdmin extends Model
{
    protected $table = 'logs_admin';
    protected $guarded=[];

    public function user() {
    return $this->belongsTo(User::class);
}
}
