<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $table = 'lots';
    protected $guarded = false;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    } 
}
