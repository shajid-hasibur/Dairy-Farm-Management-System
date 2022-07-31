<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\add_farmer;

class collection extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    public function farmer()
    {
        return $this->belongsTo(add_farmer::class,'farmer_id','id');
    }
}
