<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    use HasFactory;
    protected $table = "mailings";
    protected $primaryKey = "id";
    protected $fillable = ["email"];
    public $timestamps = true;
}
