<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $guarded = [];
}
