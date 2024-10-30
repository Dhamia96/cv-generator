<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'profile_id');
    }
}
