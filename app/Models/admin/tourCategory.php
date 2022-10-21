<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourCategory extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
