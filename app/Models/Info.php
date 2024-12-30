<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $guard = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
