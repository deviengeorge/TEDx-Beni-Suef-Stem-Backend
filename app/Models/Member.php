<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $primaryKey = "id";
    protected $fillable = ["name", "image", "title"];
    public $timestamps = false;
    
    public function committee()
    {
        return $this->belongsTo(Committee::class);
    }
}
