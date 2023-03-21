<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sublayout extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function layout()
    {
        return $this -> belongsTo(layout::class,'name','id');
    }
}
