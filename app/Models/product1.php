<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product1 extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category()
    {
        return $this -> belongsTo(category::class,'self_no','id');
    }
    public function subcategory()
    {
        return $this -> belongsTo(subcategory::class,'Book_Title','id');
    }
}
