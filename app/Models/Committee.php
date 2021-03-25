<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $table = "committees";
    protected $primaryKey = "id";
    protected $fillable = ["title"];
    public $timestamps = false;

    public function leaders()
    {
        return $this->hasMany(Leader::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
