<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;

class delivery extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function employee()
    {
        return $this->belongsTo(employee::class,'employee_id','id')->withTrashed();
    }
}
