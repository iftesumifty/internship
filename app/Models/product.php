<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function layout()
    {
        return $this -> belongsTo(layout::class,'name','id');
    }
    public function sublayout()
    {
        return $this -> belongsTo(sublayout::class,'Book_Name','id');
    }
}
