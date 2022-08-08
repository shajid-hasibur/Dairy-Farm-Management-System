<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    public $guarded=[];

    public function collection()
    {
        return $this->belongsTo(collection::class,'collection_id','id');

    }

    public function farmer()
    {
        return $this->belongsTo(add_farmer::class,'farmer_id','id');

    }

}
